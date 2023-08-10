<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use App\Models\Lang;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {

        $langs = Lang::all();
        $newses = News::getAllNews($locale);

        return View::make('admin.news.index', [
            'newses' => $newses,
            'langs' => $langs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langs = Lang::all('code','name');


        return View::make('admin.news.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request, $locale, NewsService $newsService)
    {


        $newsService->store($request);



        return Redirect::route('admin.newses.index', ['locale' => $locale])
            ->with('toast_success', trans('News successfully added'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, News $news)
    {

        $news->load([
            'text',
            'gallery',
            'meta.text'
        ]);

        $langs = Lang::all('code', 'name');
        return View::make('admin.news.edit', [
            'news' => $news,
            'langs' => $langs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $locale, News $news, NewsService $newsService)
    {
        $newsService->update($request, $news);
        return Redirect::route('admin.newses.index', ['locale' =>$locale])
            ->with('toast_success', trans('News successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, News $news)
    {
        removeFile('news', $news->img);
        removeFile('news', $news->cover_img);
        $news->delete();
        return Redirect::route('admin.newses.index', ['locale' => $locale])
            ->with('toast_success', trans('News removed successfully'));
    }
}
