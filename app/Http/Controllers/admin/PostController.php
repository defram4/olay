<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Category;
use App\Models\Lang;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create($locale)
    {
        $categories = Category::getCategoriesPostCreate($locale);
        $langs = Lang::getAllLang();
        return View::make('admin.blog.post.create', compact('categories', 'langs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PostStoreRequest $request
     * @param PostService $postService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostStoreRequest $request, PostService $postService)
    {
        $postService->createPost($request);
        return Redirect::route('admin.blog', ['locale' => App::getLocale()])
            ->with(['toast_success' => trans('Post created successfully'), 'post_page' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param Post $blogPost
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Post $blogPost)
    {
        $blogPost->load(['text','gallery', 'meta.text']);
        $langs = Lang::getAllLang();
        $categories = Category::getCategoriesPostCreate($locale);
        return View::make('admin.blog.post.edit', compact('blogPost', 'langs', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PostUpdateRequest $request
     * @param $locale
     * @param Post $blogPost
     * @param PostService $postService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostUpdateRequest $request, $locale, Post $blogPost, PostService $postService)
    {
        $postService->editPost($request, $blogPost);
        return Redirect::route('admin.blog', ['locale' => App::getLocale()])->with([
            'toast_success' => trans('Post edited successfully'),
            'post_page' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param Post $blogPost
     * @param PostService $postService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, Post $blogPost, PostService $postService)
    {
        $postService->deletePost($blogPost);
        return Redirect::route('admin.blog', ['locale' => $locale])->with([
            'toast_success' => trans('Post removed successfully'),
            'post_page' => true
        ]);
    }
}
