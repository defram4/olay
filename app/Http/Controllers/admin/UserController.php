<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserConfirmationRequest;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRoleRequest;
use App\Mail\InviteUser;
use App\Models\Role;
use App\Models\User;
use App\Models\InviteUser as InviteUserModel;
use App\Services\UserInvitation;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class UserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $roles = Role::where('active', 1)->get(['label', 'id']);
        return View::make('admin.permission.user.create', [
            'roles' => $roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserStoreRequest $request
     * @param $locale
     * @param UserInvitation $userInvitation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserStoreRequest $request, $locale, UserInvitation $userInvitation)
    {
        $userInvitation->createInvitation($request);
        return Redirect::route('admin.permissions', ['locale' => $locale])
            ->with([
                'toast_success' => trans('User invitation sent'),
                'user_page' => true
            ]);
    }

    /**
     * @param Request $request
     * @param $locale
     * @param User $user
     */
    public function edit(Request $request, $locale, User $user)
    {
        $roles = Role::where('active', 1)->get(['label', 'id']);
        return View::make('admin.permission.user.edit', [
            'roles' => $roles,
            'user' => $user
        ]);
    }

    /**
     * @param Request $request
     * @param $locale
     * @param User $user
     */
    public function update(UserUpdateRoleRequest $request, $locale, User $user)
    {
        $user->update([
            'role_id' => $request->role_id
        ]);
        return Redirect::route('admin.permissions', ['locale' => $locale])
            ->with([
                'toast_success' => trans('User role updated'),
                'user_page' => true
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, User $user)
    {
        $user->delete();
        return Redirect::route('admin.permissions', ['locale' => $locale])
            ->with([
                'toast_success' => trans('User was removed'),
                'user_page' => true
            ]);
    }


    /**
     * @param $token
     * @return \Illuminate\Contracts\View\View
     */
    public function registerByInvitation($token)
    {
        $invitation = InviteUserModel::where('token', $token)->first();
        return View::make('auth.register-by-invitation', [
            'invitation' => $invitation,
            'token' => $token
        ]);
    }

    /**
     * @param UserConfirmationRequest $request
     * @param UserInvitation $userInvitation
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function userConfirmation(UserConfirmationRequest $request, UserInvitation $userInvitation)
    {
        $user = $userInvitation->confirm($request);
        if (Auth::attempt([
            'email' => $user->email,
            'password' => $request->password
        ])) {
            return Redirect::route('admin.index', ['locale' => App::getLocale()]);
        }
        return abort(404);
    }
}
