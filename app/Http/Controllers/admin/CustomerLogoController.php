<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerLogoStoreRequest;
use App\Http\Requests\CustomerLogoUpdateRequest;
use App\Models\CustomerLogo;
use App\Models\Lang;
use App\Services\CustomerLogoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class CustomerLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function index($locale)
    {
        $customers = CustomerLogo::getCustomer($locale);
        return View::make('admin.customer-logo.index', [
            'customers' => $customers
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
        return View::make('admin.customer-logo.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CustomerLogoStoreRequest $request
     * @param $locale
     * @param CustomerLogoService $customerLogoService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustomerLogoStoreRequest $request, $locale, CustomerLogoService $customerLogoService)
    {
        $customerLogoService->store($request);
        return Redirect::route('admin.customerLogos.index', ['locale' => $locale])
            ->with('toast_success', trans('Customer logo added'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param CustomerLogo $customerLogo
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, CustomerLogo $customerLogo)
    {
        $customerLogo->load('text');
        $langs = Lang::getAllLang();
        return View::make('admin.customer-logo.edit', [
            'customer' => $customerLogo,
            'langs' => $langs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CustomerLogoUpdateRequest $request
     * @param $locale
     * @param CustomerLogo $customerLogo
     * @param CustomerLogoService $customerLogoService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CustomerLogoUpdateRequest $request, $locale, CustomerLogo $customerLogo, CustomerLogoService $customerLogoService)
    {
        $customerLogoService->update($request, $customerLogo);
        return Redirect::route('admin.customerLogos.index', ['locale' => $locale])
            ->with('toast_success', trans('Customer logo updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param CustomerLogo $customerLogo
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, CustomerLogo $customerLogo)
    {
        removeFile('customer', $customerLogo->img);
        $customerLogo->delete();
        return Redirect::route('admin.customerLogos.index', ['locale' => $locale])
            ->with('toast_success', trans('Customer logo removed'));

    }
}
