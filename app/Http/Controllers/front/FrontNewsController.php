<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Image;
use App\Models\News;
use App\Models\NewsMeta;
use App\Models\NewsTrans;
use App\Models\Page;
use App\Models\PageMeta;
use App\Models\Post;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Support\Facades\Redirect;

class FrontNewsController extends Controller
{
    public function index($locale)
    {

        $meta = PageMeta::getMetaForPage($locale, Page::NEWS);
        $content = Content::getContentByPage($locale, Page::HOME);
        $image = Image::getImageByPageId(Page::HOME);
        $newses = News::getAllNewsForFront($locale);
        $posts = Post::getAllByCategoryId($locale, 1);

        return view()->make('front.pages.news.news', [
            'meta' => $meta,
            'content' => $content,
            'locale' => $locale,
            'image' => $image,
            'newses' => $newses,
            'posts' => $posts,

        ]);
    }

    public function show($locale, $slug)
    {
        $newsId = NewsTrans::select('news_id', 'lang')
            ->where('slug', $slug)
            ->first();

        if ($newsId->lang !== $locale) {
            $newsRedirect = NewsTrans::select('slug')
                ->where([
                    ['news_id', $newsId->news_id],
                    ['lang', $locale]
                ])
                ->first();

            return Redirect::route('front.single_blog', [
                'locale' => $locale,
                'slug' => $newsRedirect->slug
            ]);
        }

        $news = News::getSingleNewsForFront($locale, $newsId->news_id);
        $newses = News::getAllNewsForFront($locale);
        $content = Content::getContentByPage($locale, Page::HOME);
        $image = Image::getImageByPageId(Page::HOME);
        $newsMeta = NewsMeta::getNewsMeta($locale, $newsId->news_id);
        $services = Service::getForFrontAllServices($locale);
        $socials = Social::getAllSocials($locale);
        $posts = Post::getAllByCategoryId($locale, 1);



        return view()->make('front.pages.blog.single_blog', [
            'newsMeta' => $newsMeta,
            'content' => $content,
            'image' => $image,
            'news' => $news,
            'newses' => $newses,
            'services' => $services,
            'socials' => $socials,
            'posts' => $posts,

        ]);
    }
}
