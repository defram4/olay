<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use App\Http\Requests\ImageUpdateRequest;
use App\Models\Image;
use App\Models\Page;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $images = Image::select('images.id', 'images.key', 'images.img', 'pages.label as home_label')
            ->leftJoin('pages', 'pages.id', 'images.page_id')
            ->get();
        return View::make('admin.image.index', [
            'images' => $images
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
        return View::make('admin.image.create', [
            'pages' => $pages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ImageRequest $request
     * @param $locale
     * @param ImageService $imageService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ImageRequest $request, $locale, ImageService $imageService)
    {
        $imageService->store($request);
        return Redirect::route('admin.images.index', ['locale' => $locale])
            ->with('toast_success', trans('Image created'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param Image $image
     * @param ImageService $imageService
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Image $image)
    {
        $pages = Page::getActivePages();
        Session::put('admin2_url', url()->previous());
        return View::make('admin.image.edit', [
            'image' => $image,
            'pages' => $pages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ImageRequest $request
     * @param $locale
     * @param Image $image
     * @param ImageService $imageService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ImageUpdateRequest $request, $locale, Image $image, ImageService $imageService)
    {
        $imageService->update($request, $image);


        return Redirect::to(Session::get('admin2_url'))
            ->with('toast_success', trans('Content updated'));

//        return Redirect::route('admin.images.index', ['locale' => $locale])
//            ->with('toast_success', trans('Image updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param Image $image
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, Image $image)
    {
        removeFile('image', $image->img);
        $image->delete();
        return Redirect::route('admin.images.index', ['locale' => $locale])
            ->with('toast_success', trans('Image removed'));
    }
}
