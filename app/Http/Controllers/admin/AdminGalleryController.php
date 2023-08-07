<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Lang;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\View;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {

        $langs = Lang::all();
        $gallerys = Gallery::getAllGalleries($locale);

        return View::make('admin.gallery.index', [
            'gallerys' => $gallerys,
            'langs' => $langs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($locale)
    {
        $langs = Lang::all();

        return View::make('admin.gallery.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request, $locale, GalleryService $galleryService)
    {
        $galleryService->store($request);

        return Redirect::route('admin.galleries.index', [
            'locale' => $locale
        ])
            ->with('toast_success', trans('Gallery successfully added'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, Gallery $gallery)
    {

        $langs = Lang::all('code', 'name');

        return View::make('admin.gallery.edit', [
            'gallery' => $gallery,
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
    public function update(GalleryRequest $request, $locale, Gallery $gallery, GalleryService $galleryService)
    {
        $galleryService->update($request, $gallery);

        return Redirect::route('admin.galleries.index', ['locale' => $locale])
            ->with('toast_succes', trans('Gallery succesfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, Gallery $gallery)
    {
        removeFile('gallery', $gallery->img);
        $gallery->delete();
        return Redirect::route('admin.galleries.index', ['locale' => $locale])
            ->with('toast_succes', trans('Gallery removed succesfully'));
    }
}
