<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ServiceGalleryController extends Controller
{
    public function delete($locale, ServiceGallery $id)
    {
        removeFile('service', $id->img);
        $id->delete();
        return Redirect::back();
    }
}
