<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductGalleryController extends Controller
{
    public function delete($locale, ProjectGallery $id)
    {
        removeFile('project', $id->img);
        $id->delete();
        return Redirect::back();
    }
}
