<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubServiceStoreRequest;
use App\Http\Requests\SubServiceUpdateRequest;
use App\Models\Lang;
use App\Models\Service;
use App\Models\SubService;
use App\Services\SubServiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class SubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function index($locale)
    {
        $subServices = SubService::getSubServices($locale);
        return View::make('admin.sub-service.index', [
            'subServices' => $subServices
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function create($locale)
    {
        $services = Service::getServices($locale);
        $langs = Lang::getAllLang();
        return View::make('admin.sub-service.create', [
            'services' => $services,
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SubServiceStoreRequest $request
     * @param $locale
     * @param SubServiceService $subServiceService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SubServiceStoreRequest $request, $locale, SubServiceService $subServiceService)
    {
        $subServiceService->store($request);
        return Redirect::route('admin.sub_services.index', ['locale' => $locale])
            ->with('toast_success', trans('Sub Service added successfully'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param SubService $subService
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, SubService $subService)
    {
        $subService->load(['text', 'meta.text']);
        $services = Service::getServices($locale);
        $langs = Lang::getAllLang();
        return View::make('admin.sub-service.edit', [
            'subService' => $subService,
            'services' => $services,
            'langs' => $langs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SubServiceUpdateRequest $request
     * @param $locale
     * @param SubService $subService
     * @param SubServiceService $subServiceService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SubServiceUpdateRequest $request, $locale, SubService $subService, SubServiceService $subServiceService)
    {
        $subServiceService->update($request, $subService);
        return Redirect::route('admin.sub_services.index', ['locale' => $locale])
            ->with('toast_success', trans('Sub Service updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param SubService $subService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, SubService $subService)
    {
        $subService->load('meta');
        removeFile('subService', $subService->img);
        removeFile('subService', $subService->meta->img);
        $subService->delete();
        return Redirect::route('admin.sub_services.index', ['locale' => $locale])
            ->with('toast_success', trans('Sub Service removed successfully'));
    }
}
