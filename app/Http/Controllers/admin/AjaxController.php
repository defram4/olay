<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\CustomerLogo;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Lang;
use App\Models\News;
use App\Models\Page;
use App\Models\PartnerLogo;
use App\Models\Policy;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Models\Project;
use App\Models\ProjectMeta;
use App\Models\Review;
use App\Models\Role;
use App\Models\Service;
use App\Models\Social;
use App\Models\SubService;
use App\Models\Team;
use App\Models\Terms;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\WhyChoose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class AjaxController extends Controller
{
    public function langStatus(Request $request)
    {
        Lang::where('id', $request->langId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function categoryStatus(Request $request)
    {
        Category::where('id', $request->categoryId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function postStatus(Request $request)
    {
        Post::where('id', $request->postId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function roleStatus(Request $request)
    {
        Role::where('id', $request->roleId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function userStatus(Request $request)
    {
        User::where('id', $request->userId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function serviceStatus(Request $request)
    {
        Service::where('id', $request->serviceId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function projectStatus(Request $request)
    {
        Project::where('id', $request->projectId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function newsStatus(Request $request)
    {
        News::where('id', $request->newsId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function bannerStatus(Request $request)
    {
        Banner::where('id', $request->bannerId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function subServiceStatus(Request $request)
    {
        SubService::where('id', $request->serviceId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function productCategoryStatus(Request $request)
    {
        ProductCategory::where('id', $request->categoryId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function productSubCategoryStatus(Request $request)
    {
        ProductSubCategory::where('id', $request->categoryId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function productStatus(Request $request)
    {
        Product::where('id', $request->productId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function pageStatus(Request $request)
    {
        Page::where('id', $request->pageId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function customerLogoStatus(Request $request)
    {
        CustomerLogo::where('id', $request->customerId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function partnerLogoStatus(Request $request)
    {
        PartnerLogo::where('id', $request->partnerId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function teamStatus(Request $request)
    {
        Team::where('id', $request->teamId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function galleryStatus(Request $request)
    {
        Gallery::where('id', $request->galleryId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function testimonialStatus(Request $request)
    {
        Testimonial::where('id', $request->testimonialId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function socialStatus(Request $request)
    {
        Social::where('id', $request->socialId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function why_chooseStatus(Request $request)
    {
        WhyChoose::where('id', $request->why_chooseId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function faqStatus(Request $request)
    {
        Faq::where('id', $request->faqId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function termStatus(Request $request)
    {
        Terms::where('id', $request->termId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function policyStatus(Request $request)
    {
        Policy::where('id', $request->policyId)->update(['active' => $request->status]);
        return Response::noContent();
    }

    public function reviewStatus(Request $request)
    {
        Review::where('id', $request->reviewId)->update(['active' => $request->status]);
        return Response::noContent();
    }

}
