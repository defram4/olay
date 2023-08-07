<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Image;
use App\Models\PageMeta;
use App\Models\Post;
use App\Models\PostMeta;
use App\Models\PostTrans;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class BlogFrontController extends Controller
{

//    TODO:THIS IS FOR BLOG PAGE - UNCOMENT THIS TO SHOW ON FRONT

    public function index($locale)
    {

        $posts = Post::getAllPosts($locale);
        $img = Image::getImageByPageId(5);
        $categories = Category::getAllCategories($locale);
        $content = Content::getContentByPage($locale, 5); //number 5 is page ID check DATABASE what ID is your page
        $meta = PageMeta::getMetaForPage($locale, 5); //number 5 is page ID check DATABASE what ID is your page
        $services = Service::getForFrontAllServices($locale);

        return View::make('front.pages.blog.blog', [
            'posts' => $posts,
            'content' => $content,
            'categories' => $categories,
            'images' => $img,
            'meta' => $meta,
            'services' => $services
        ]);
    }


    public function show($locale, $slug)
    {

        $postId = PostTrans::select('post_id', 'lang')
            ->where('slug', $slug)
            ->first();
        if ($postId->lang !== $locale) {
            $postRedirect = PostTrans::select('slug')
                ->where([
                    ['post_id', $postId->post_id],
                    ['lang', $locale]
                ])
                ->first();
            return Redirect::route('front.single.blog', [
                'locale' => $locale,
                'slug' => $postRedirect->slug
            ]);
        }


        $post = Post::getFrontSinglePost($locale, $postId->post_id);
        $postMeta = PostMeta::getPostMeta($locale, $postId->post_id);
        $content = Content::getContentByPage($locale, 5);
        $img = Image::getImageByPageId(5);
        $relevantPosts = Post::getRelevantPosts($locale, $postId);
        $services = Service::getForFrontAllServices($locale);


        return View::make('front.pages.blog.single-post', [
            'post' => $post,
            'locale' => $locale,
            'postMeta' => $postMeta,
            'content' => $content,
            'images' => $img,
            'relevantPosts' => $relevantPosts,
            'services' => $services
        ]);
    }

}
