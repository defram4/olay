<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use App\Models\Lang;
use App\Models\Banner;
use App\Services\BannerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\View;

class AdminBannerController extends Controller
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
        $banners = Banner::getAllBanners($locale);

        return View::make('admin.banner.index', [
            'banners' => $banners,
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

        return View::make('admin.banner.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BannerRequest $request, $locale, BannerService $bannerService)
    {
        $bannerService->store($request);

        return Redirect::route('admin.banners.index', [
            'locale' => $locale
        ])
            ->with('toast_success', trans('Banner successfully added'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, Banner $banner)
    {
        $banner->load([
            'text',
        ]);

        $langs = Lang::all('code', 'name');

        return View::make('admin.banner.edit', [
            'banner' => $banner,
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
    public function update(BannerRequest $request, $locale, Banner $banner, BannerService $bannerService)
    {
        $bannerService->update($request, $banner);

        return Redirect::route('admin.banners.index', ['locale' => $locale])
            ->with('toast_success', trans('Banner successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, Banner $banner)
    {
        removeFile('banner', $banner->big_img);
        removeFile('banner', $banner->mobile_img);
        removeFile('banner', $banner->big_video);
        removeFile('banner', $banner->mobile_video);
        $banner->delete();
        return Redirect::route('admin.banners.index', ['locale' => $locale])
            ->with('toast_success', trans('Banner removed successfully'));
    }


}
