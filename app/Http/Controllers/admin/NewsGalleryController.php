<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\NewsGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class NewsGalleryController extends Controller
{
    public function delete($locale, NewsGallery $id)
    {
        removeFile('news', $id->img);
        $id->delete();
        return Redirect::back();
    }
}
