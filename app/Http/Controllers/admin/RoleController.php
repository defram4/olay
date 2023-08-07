<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleStoreRequest;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class RoleController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return View::make('admin.permission.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RoleStoreRequest $request)
    {
        $data = $request->validated();
        Role::create($data);
        return Redirect::route('admin.permissions', ['locale' => App::getLocale()])
            ->with('toast_success', trans('Role added successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param Role $role
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Role $role)
    {
        return View::make('admin.permission.role.edit', ['role' => $role]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $locale
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RoleStoreRequest $request, $locale, Role $role)
    {
        $role->update($request->validated());
        return Redirect::route('admin.permissions', ['locale' => App::getLocale()])
            ->with('toast_success', trans('Role successfully updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, Role $role)
    {
        $role->delete();
        return Redirect::route('admin.permissions', ['locale' => $locale])
            ->with('toast_success', trans('Role successfully removed'));
    }
}
