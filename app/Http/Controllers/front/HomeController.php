<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Content;
use App\Models\CustomerLogo;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\News;
use App\Models\Page;
use App\Models\PageMeta;
use App\Models\PartnerLogo;
use App\Models\Post;
use App\Models\Project;
use App\Models\Review;
use App\Models\Service;
use App\Models\Social;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\WhyChoose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class HomeController extends Controller
{

    public function index($locale)
    {

        $content = Content::getContentByPage($locale, Page::HOME);
        $img = Image::getImageByPageId(1);
        $customers = CustomerLogo::getCustomerForFront($locale);
        $partners = PartnerLogo::getPartnerForFront($locale);
        $teams = Team::getAllTeamsForFront($locale);
        $why_chooses = WhyChoose::getAllWhyChoosesForFront($locale);
        $testimonials = Testimonial::getAllTestimonialsForFront($locale);
        $gallerys = Gallery::getAllGalleriesForFront($locale);
        $reviews = Review::getAllReviewsForFront($locale);
        $posts = Post::getAllByCategoryId($locale, 1); // Here you need to indicate what Id has your caategory from database
        $meta = PageMeta::getMetaForPage($locale, 1);
        $banners = Banner::getAllBannersForFront($locale);
        $projects = Project::getForFrontFourProjects($locale);
        $newses = News::getAllNewsForFront($locale);
        $socials = Social::getAllSocials($locale);
        $socials = Social::getAllSocialsForFront($locale);
        $services = Service::getForFrontAllServices($locale);



        return View::make('front.pages.home', [
            'content' => $content,
            'images' => $img,
            'customers' => $customers,
            'why_chooses' => $why_chooses, // img , title, text
            'socials' => $socials, // img(sometimes) , name(sometimes) , url
            'testimonials' => $testimonials, // img , name, function, text
            'partners' => $partners, // img , url
            'gallerys' => $gallerys, // img
            'teams' => $teams, // name , function , text , img
            'reviews' => $reviews,
            'banners' => $banners, // title_1 , title_2 , title_3 , title_4 , text , btn_text , btn_url , big_img , mobile_img , big_video , mobile_video
            'posts' => $posts,
            'meta' => $meta,
            'services' => $services,
            'projects' => $projects,
            'newses' => $newses,
        ]);

    }

}

