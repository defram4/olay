<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\CustomerLogo;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceMeta;
use App\Models\ServiceTrans;
use App\Models\Content;
use App\Models\Image;
use App\Models\PageMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ServiceFrontController extends Controller
{
    public function index($locale)
    {
        $img = Image::getImageByPageId(3);
        $services = Service::getForFrontAllServices($locale);
        $content = Content::getContentByPage($locale, 3);
        $meta = PageMeta::getMetaForPage($locale, 3);


        return View::make('front.pages.services.service', [
            'images' => $img,
            'services' => $services,
            'content'=>$content,
            'meta'=>$meta
        ]);


    }

    public function show($locale, $slug)
    {
        $serviceId = ServiceTrans::select('service_id', 'lang')
            ->where('slug', $slug)
            ->first();
        if ($serviceId->lang !== $locale) {
            $serviceRedirect = ServiceTrans::select('slug')
                ->where([
                    ['service_id', $serviceId->service_id],
                    ['lang', $locale]
                ])
                ->first();
            return Redirect::route('front.single.service', [
                'locale' => $locale,
                'slug' => $serviceRedirect->slug
            ]);
        }

        $service = Service::getFrontSingleService($locale, $serviceId->service_id);
        $content = Content::getContentByPage($locale, 3);
        $relevantServices = Service::getAllServiceOnSingleServicePage($locale, $serviceId);
        $img = Image::getImageByPageId(3);
        $serviceMeta = ServiceMeta::getServiceMeta($locale, $serviceId->service_id);
        $customers = CustomerLogo::getCustomerForFront($locale);
        $reviews = Review::getAllReviewsForFront($locale);
        $services = Service::getForFrontAllServices($locale);

        return View::make('front.pages.services.single-service', [
            'locale' => $locale,
            'service' => $service,
            'content' => $content,
            'relevantServices' => $relevantServices,
            'images' => $img,
            'serviceMeta' => $serviceMeta,
            'services' => $services,
            'customers' => $customers,
            'reviews' => $reviews
        ]);
    }

}
