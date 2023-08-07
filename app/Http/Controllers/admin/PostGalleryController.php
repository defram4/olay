<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PostGalleryController extends Controller
{
    public function delete($locale, PostGallery $id)
    {
        removeFile('post', $id->img);
        $id->delete();
        return Redirect::back();
    }
}
