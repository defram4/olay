<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LangStoreRequest;
use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class LangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $langs = Lang::all(['id', 'name', 'code', 'active']);
        return View::make('admin.langs.index', compact('langs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return View::make('admin.langs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LangStoreRequest $request)
    {
        Lang::create($request->validated());
        return Redirect::route('admin.langs.index', ['locale' => App::getLocale()])
            ->with('toast_success', trans('Language successfully added'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Lang $lang)
    {
        return View::make('admin.langs.edit', compact('lang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $locale
     * @param Lang $lang
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(LangStoreRequest $request, $locale, Lang $lang)
    {
        $lang->update($request->validated());
        return Redirect::route('admin.langs.index', ['locale' => App::getLocale()])
            ->with('toast_success', trans('Language is updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, $id)
    {
        Lang::destroy($id);
        return Redirect::route('admin.langs.index', ['locale' => App::getLocale()])
            ->with('toast_success', trans('Language is successfully removed'));
    }
}
