<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageStoreRequest;
use App\Http\Requests\PageUpdateRequest;
use App\Models\Lang;
use App\Models\Page;
use App\Services\PageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $pages = Page::all(['id', 'label', 'active']);
        return View::make('admin.page.index', [
            'pages' => $pages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $langs = Lang::getAllLang();
        return View::make('admin.page.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PageStoreRequest $request
     * @param $locale
     * @param PageService $pageService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PageStoreRequest $request, $locale, PageService $pageService)
    {
        $pageService->store($request);
        return Redirect::route('admin.pages.index', ['locale' => $locale])
            ->with('toast_success', trans('Page created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param Page $page
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Page $page)
    {
        $page->load('meta.text');
        $langs = Lang::getAllLang();
        return View::make('admin.page.edit', [
            'page' => $page,
            'langs' => $langs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PageUpdateRequest $request
     * @param $locale
     * @param Page $page
     * @param PageService $pageService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PageUpdateRequest $request, $locale, Page $page, PageService $pageService)
    {
        $pageService->update($request, $page);
        return Redirect::route('admin.pages.index', ['locale' => $locale])
            ->with('toast_success', trans('Page updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param Page $page
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, Page $page)
    {
        $page->load('meta');
        removeFile('page', $page->meta->img);
        $page->delete();
        return Redirect::route('admin.pages.index', ['locale' => $locale])
            ->with('toast_success', trans('Page removed'));
    }
}
