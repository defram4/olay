<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Lang;
use App\Models\Service;
use App\Services\ServiceService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function index($locale)
    {
        $services = Service::getServices($locale);
        return View::make('admin.service.index', [
            'services' => $services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $langs = Lang::all('code', 'name');
        return View::make('admin.service.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $locale
     * @param ServiceService $serviceService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServiceStoreRequest $request, $locale, ServiceService $serviceService)
    {
        $serviceService->store($request);
        return Redirect::route('admin.services.index', ['locale' => $locale])
            ->with('toast_success', trans('Service successfully added'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param Service $service
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Service $service)
    {
        $service->load(['text', 'gallery', 'meta.text']);
        $langs = Lang::all('code', 'name');
        return View::make('admin.service.edit', [
            'service' => $service,
            'langs' => $langs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceUpdateRequest $request
     * @param $locale
     * @param Service $service
     * @param ServiceService $serviceService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ServiceUpdateRequest $request, $locale, Service $service, ServiceService $serviceService)
    {
        $serviceService->update($request, $service);
        return Redirect::route('admin.services.index', ['locale' => $locale])
            ->with('toast_success', trans('Service successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param ServiceService $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, Service $service)
    {
        removeFile('service', $service->img);
        removeFile('service', $service->meta->img);
        $service->delete();
        return Redirect::route('admin.services.index', ['locale' => $locale])
            ->with('toast_success', trans('Service removed successfully'));
    }
}
