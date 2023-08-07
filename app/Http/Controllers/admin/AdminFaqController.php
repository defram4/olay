<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqStoreRequest;
use App\Http\Requests\FaqUpdateRequest;
use App\Models\Faq;
use App\Models\Lang;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminFaqController extends Controller
{
    public function index($locale)
    {
        $faqs = Faq::select('faqs.id', 'faqs.active', 'faq_trans.title', 'faq_trans.text', 'faqs.created_at')
            ->leftJoin('faq_trans', function ($join) use ($locale) {
                $join->on('faq_trans.faq_id', 'faqs.id')
                    ->where('faq_trans.lang', $locale);
            })
            ->latest()
            ->get();

        return View::make('admin.faq.index', [
            'faqs' => $faqs
        ]);

    }

    public function create($locale)
    {
        $langs = Lang::getAllLang();

        return View::make('admin.faq.faq.create', [
            'langs' => $langs
        ]);
    }

    public function store(FaqStoreRequest $request)
    {
        $data = $request->validated();
        $faq = Faq::create();
        $faq->text()->createMany($data['text']);
        return Redirect::route('admin.faqs.index', ['locale' => App::getLocale()])
            ->with(['toast_success' => trans('FAQ created successfully'), 'faq_page' => true]);
    }

    public function edit($locale, $id)
    {
        $faq = Faq::findOrFail($id);
        $faq->load(['text']);
        $langs = Lang::getAllLang();

        return View::make('admin.faq.faq.edit', compact('faq', 'langs'));
    }

    public function update(FaqUpdateRequest $request, $locale, Faq $faq)
    {

        $data = $request->validated();

        (New TextService())->updateText($data['text'],$faq);

        return Redirect::route('admin.faqs.index', ['locale' => app()->getLocale()])->with([
            'toast_success' => trans('Faq edited successfully')]);
    }

    public function destroy($locale, $id)
    {
        Faq::destroy($id);
        return redirect()->route('admin.faqs.index', $locale);
    }
}
