<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use App\Models\Lang;
use App\Models\Social;
use App\Services\SocialService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\View;

class AdminSocialController extends Controller
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
        $socials = Social::getAllSocials($locale);

        return View::make('admin.social.index', [
            'socials' => $socials,
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

        return View::make('admin.social.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialRequest $request, $locale, SocialService $socialService)
    {
        $socialService->store($request);

        return Redirect::route('admin.socials.index', [
            'locale' => $locale
        ])
            ->with('toast_success', trans('Social successfully added'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($locale, Social $social)
    {
        $social->load([
            'text',
        ]);

        $langs = Lang::all('code', 'name');

        return View::make('admin.social.edit', [
            'social' => $social,
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
    public function update(SocialRequest $request, $locale, Social $social, SocialService $socialService)
    {
        $socialService->update($request, $social);

        return Redirect::route('admin.socials.index', ['locale' => $locale])
            ->with('toast_succes', trans('Social succesfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($locale, Social $social)
    {
        removeFile('social', $social->img);
        $social->delete();
        return Redirect::route('admin.socials.index', ['locale' => $locale])
            ->with('toast_succes', trans('Social removed succesfully'));
    }
}
