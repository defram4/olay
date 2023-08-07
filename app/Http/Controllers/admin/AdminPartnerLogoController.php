<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerLogoStoreRequest;
use App\Http\Requests\PartnerLogoUpdateRequest;
use App\Models\Lang;
use App\Models\PartnerLogo;
use App\Services\PartnerLogoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminPartnerLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($locale)
    {
        $partners = PartnerLogo::getPartner($locale);
        return View::make('admin.partner-logo.index', [
            'partners' => $partners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langs = Lang::getAllLang();
        return View::make('admin.partner-logo.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerLogoStoreRequest $request, $locale, PartnerLogoService $partnerLogoService)
    {
        $partnerLogoService->store($request);
        return Redirect::route('admin.partnerLogos.index', ['locale' => $locale])
            ->with('toast_success', trans('Partner logo added'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param PartnerLogo $partnerLogo
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, PartnerLogo $partnerLogo)
    {
        $partnerLogo->load('text');
        $langs = Lang::getAllLang();
        return View::make('admin.partner-logo.edit', [
            'partner' => $partnerLogo,
            'langs' => $langs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PartnerLogoUpdateRequest $request
     * @param $locale
     * @param PartnerLogo $partnerLogo
     * @param PartnerLogoService $partnerLogoService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PartnerLogoUpdateRequest $request, $locale, PartnerLogo $partnerLogo, PartnerLogoService $partnerLogoService)
    {
        $partnerLogoService->update($request, $partnerLogo);
        return Redirect::route('admin.partnerLogos.index', ['locale' => $locale])
            ->with('toast_success', trans('Partner logo updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param PartnerLogo $partnerLogo
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, PartnerLogo $partnerLogo)
    {
        removeFile('partner', $partnerLogo->img);
        $partnerLogo->delete();
        return Redirect::route('admin.partnerLogos.index', ['locale' => $locale])
            ->with('toast_success', trans('Partner logo removed'));

    }
}
