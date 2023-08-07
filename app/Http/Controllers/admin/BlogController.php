<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BlogController extends Controller
{
    public function index($locale)
    {
        $categories = Category::getAllCategories($locale);
        $posts = Post::getAllPosts($locale);
        return View::make('admin.blog.index', compact('categories', 'posts'));
    }
}
