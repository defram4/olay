<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class AdminWidgetController extends Controller
{
    public function index()
    {
        return View::make('admin.widget.index');
    }
}
