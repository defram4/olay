<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TermStoreRequest;
use App\Http\Requests\TermUpdateRequest;
use App\Models\Lang;
use App\Models\Terms;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminTermController extends Controller
{
    public function index($locale)
    {
        $terms = Terms::select('terms.id', 'terms.active', 'terms_trans.title', 'terms_trans.text', 'terms.created_at')
            ->leftJoin('terms_trans', function ($join) use ($locale) {
                $join->on('terms_trans.term_id', 'terms.id')
                    ->where('terms_trans.lang', $locale);
            })
            ->latest()
            ->get();

        return View::make('admin.term.index', [
            'terms' => $terms
        ]);
    }

    public function create($locale)
    {
        $langs = Lang::getAllLang();

        return View::make('admin.term.term.create', [
            'langs' => $langs
        ]);
    }

    public function store(TermStoreRequest $request)
    {
        $data = $request->validated();
        $term = Terms::create();
        $term->text()->createMany($data['text']);
        return Redirect::route('admin.terms.index', ['locale' => App::getLocale()])
            ->with(['toast_success' => trans('Term created successfully'), 'term_page' => true]);
    }

    public function edit($locale, $id)
    {
        $term = Terms::findOrFail($id);
        $term->load(['text']);
        $langs = Lang::getAllLang();

        return View::make('admin.term.term.edit', compact('term', 'langs'));
    }

    public function update(TermUpdateRequest $request, $locale, Terms $term)
    {

        $data = $request->validated();

        (New TextService())->updateText($data['text'],$term);

        return Redirect::route('admin.terms.index', ['locale' => app()->getLocale()])->with([
            'toast_success' => trans('Terms edited successfully')]);
    }

    public function destroy($locale, $id)
    {
        Terms::destroy($id);
        return redirect()->route('admin.terms.index', $locale);
    }
}
