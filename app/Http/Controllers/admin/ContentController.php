<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContentRequest;
use App\Models\Content;
use App\Models\Lang;
use App\Models\Page;
use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function index($locale)
    {
        $contents = Content::select('contents.key', 'contents.id', 'content_trans.text',
            'pages.label as page_label')
            ->leftJoin('content_trans', function ($join) use ($locale) {
                $join->on('content_trans.content_id', 'contents.id')
                    ->where('content_trans.lang', $locale);
            })
            ->leftJoin('pages', 'pages.id', 'contents.page_id')
            ->get();
        return View::make('admin.content.index', [
            'contents' => $contents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $pages = Page::getActivePages();
        Session::put('admin2_url', url()->previous());
        $langs = Lang::getAllLang();
        return View::make('admin.content.create', [
            'pages' => $pages,
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ContentRequest $request
     * @param $locale
     * @param ContentService $contentService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ContentRequest $request, $locale, ContentService $contentService)
    {
        $contentService->store($request);
        return Redirect::route('admin.contents.index', ['locale' => $locale])
            ->with('toast_success', trans('Content created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param Content $content
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Content $content)
    {
        $content->load('text');
        Session::put('admin2_url', url()->previous());
        $pages = Page::getActivePages();
        $langs = Lang::getAllLang();
        return View::make('admin.content.edit', [
            'content' => $content,
            'langs' => $langs,
            'pages' => $pages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ContentRequest $request
     * @param $locale
     * @param ContentService $contentService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ContentRequest $request, $locale, Content $content, ContentService $contentService)
    {
        $contentService->update($request, $content);

        return Redirect::to(Session::get('admin2_url'))
            ->with('toast_success', trans('Content updated'));

//        return Redirect::route('admin.contents.index', ['locale' => $locale])
//            ->with('toast_success', trans('Content updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param Content $content
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, Content $content)
    {
        $content->delete();
        return Redirect::route('admin.contents.index', ['locale' => $locale])
            ->with('toast_success', trans('Content removed'));
    }
}
