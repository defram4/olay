<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Content;
use App\Models\CustomerLogo;
use App\Models\Image;
use App\Models\PageMeta;
use App\Models\Patents;
use App\Models\Post;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AboutController extends Controller
{


//    TODO:UNCOMENT THIS CODE FOR VIEW AND GET ALL FROM DB

    public function index($locale)
    {
        $customers = CustomerLogo::getCustomer($locale);
        $img = Image::getImageByPageId(2); //page ID
        $content = Content::getContentByPage($locale, 2); //page ID
        $meta = PageMeta::getMetaForPage($locale, 2); //page ID
        $services = Service::getForFrontAllServices($locale);
        $reviews = Review::getAllReviewsForFront($locale);

        return View::make('front.pages.about', [
            'customers' => $customers,
            'content' => $content,
            'images' => $img,
            'meta'=>$meta,
            'services' => $services,
            'reviews' => $reviews
        ]);
    }

}
