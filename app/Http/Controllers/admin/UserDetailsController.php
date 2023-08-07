<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserDetailsUpdateRequest;
use App\Http\Requests\UserPasswordUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class UserDetailsController extends Controller
{
    public function details($locale)
    {
        return View::make('admin.user.show');
    }

    public function updateDetails(UserDetailsUpdateRequest $request, $locale)
    {
        Auth::user()->update($request->validated());
        return Redirect::route('admin.user_details_show', ['locale' => $locale])
            ->with('toast_success', trans('Details was updated'));
    }

    public function updatePassword(UserPasswordUpdateRequest $request, $locale)
    {
        User::where('id', Auth::id())->update([
            'password' => Hash::make($request->post('new_password'))
        ]);
        return Redirect::route('admin.user_details_show', ['locale' => $locale])
            ->with('toast_success', trans('Password was updated'));
    }
}
