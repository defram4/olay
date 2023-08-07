<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class BlogFilterController extends Controller
{

//    TODO:THIS IS FOR FILTER ON BLOG PAGE WERE YOU HAVE ALL POSTS

    public function filterBlog($locale, $id)
    {
        $posts = Post::select('posts.id', 'posts.img', 'posts.created_at', 'post_trans.title', 'post_trans.text', 'post_trans.slug')
            ->leftJoin('post_trans', function ($join) use ($locale) {
                $join->on('post_trans.post_id', 'posts.id')
                    ->where('post_trans.lang', $locale);
            })
            ->where([
                ['posts.category_id', $id],
                ['posts.active', 1]
            ])
            ->latest()
            ->get();

        return Response::json(['view' => View::make('front.components.posts_container_card', ['posts' => $posts])->render()]);

    }

}
