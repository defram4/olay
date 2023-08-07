<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogCategoryStoreRequest;
use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Models\Category;
use App\Models\CategoryMeta;
use App\Models\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class BlogCategoryController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $langs = Lang::all();
        return View::make('admin.blog.category.create', compact('langs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BlogCategoryStoreRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('img')) {
            $data['img'] = Storage::disk('category')->put('/', $request->file('img'));
        }
        if ($request->hasFile('seo.img')) {
            $data['seo']['img'] = Storage::disk('category')->put('/', $request->file('seo.img'));
        }
        $category = Category::create(['img' => $data['img']]);
        $category->text()->createMany($data['text']);
        $categoryMeta = $category->meta()->create($data['seo']);
        $categoryMeta->text()->createMany($data['seotext']);
        return Redirect::route('admin.blog', ['locale' => App::getLocale()])
            ->with('toast_success', trans('Category added successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $blogCategory
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Category $blogCategory)
    {
        $langs = Lang::all();
        $blogCategory->load('text');
        $meta = CategoryMeta::with('text')
            ->where('category_id', $blogCategory->id)
            ->first();
        return View::make('admin.blog.category.edit', compact('blogCategory', 'meta', 'langs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $locale
     * @param Category $blogCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BlogCategoryUpdateRequest $request, $locale, Category $blogCategory)
    {
        $data = $request->validated();
        $blogCategory->load('text');
        $meta = CategoryMeta::where('category_id', $blogCategory->id)->with('text')->first();
        if ($request->hasFile('img')) {
            removeFile('category', $blogCategory->img);
            $img = storeFile('category', $request->file('img'));
            $blogCategory->update(['img' => $img]);
        }
        if ($request->hasFile('seo.img')) {
            removeFile('category', $meta->img);
            $metaImg = storeFile('category', $request->file('seo.img'));
            $meta->update(['img' => $metaImg]);
        }
        foreach ($data['text'] as $key => $text) {
            $trans = $blogCategory->text[$key] ?? null;
            if ($trans) {
                $trans->update($text);
            } else {
                $blogCategory->text()->create($text);
            }
        }
        foreach ($data['seotext'] as $key => $metaText) {
            $trans = $meta->text[$key] ?? null;
            if ($trans) {
                $trans->update($metaText);
            } else {
                $meta->text()->create($metaText);
            }
        }
        return Redirect::route('admin.blog', ['locale' => App::getLocale()])
            ->with('toast_success', trans('Category updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param Category $blogCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, Category $blogCategory)
    {
//        dd($blogCategory);
        removeFile('category', $blogCategory->img);
        removeFile('category', $blogCategory->meta->img);
        $blogCategory->delete();
        return Redirect::route('admin.blog', ['locale' => App::getLocale()])
            ->with('toast_success', trans('Category successfully removed'));
    }
}
