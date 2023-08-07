<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class PermisionController extends Controller
{
    public function index()
    {
        $roles = Role::all('label', 'id', 'active');
        $users = User::where('email', '!=', 'admin@royalsystems.md')->with('role')->get();
        return View::make('admin.permission.index', [
            'roles' => $roles,
            'users' => $users
        ]);
    }
}
