<?php


namespace App\Services;


use App\Mail\InviteUser;
use App\Models\InviteUser as InviteUserModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserInvitation
{
    public function createInvitation(Request $request)
    {
        $user = User::create([
            'name' => 'User',
            'email' => $request->email,
            'password' => Hash::make('asdfgKJasd126'),
            'role_id' => $request->role_id
        ]);
        $token = Str::uuid();
        $url = route('invitation', ['token' => $token]);
        InviteUserModel::create([
            'user_id' => $user->id,
            'token' => $token
        ]);
        Mail::to($request->email)->send(new InviteUser($url));
        return true;
    }


    public function confirm(Request $request)
    {
        $invitation = InviteUserModel::where('token', $request->invite_token)->first();
        $user = $invitation->user;
        $user->update([
            'name' => $request->name,
            'password' => Hash::make($request->password)
        ]);
        $invitation->delete();
        return $user;
    }
}
