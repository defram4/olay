<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategoryStoreRequest;
use App\Http\Requests\ProductCategoryUpdateRequest;
use App\Models\Lang;
use App\Models\ProductCategory;
use App\Services\ProductCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function index($locale)
    {
        $categories = ProductCategory::getProductCategory($locale);
        return View::make('admin.product.category.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $langs = Lang::getAllLang();
        return View::make('admin.product.category.create', [
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductCategoryStoreRequest $request
     * @param $locale
     * @param ProductCategoryService $productCategoryService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductCategoryStoreRequest $request, $locale, ProductCategoryService $productCategoryService)
    {
        $productCategoryService->store($request);
        return Redirect::route('admin.product_categories.index', ['locale' => $locale])
            ->with('toast_success', trans('Category added successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param ProductCategory $productCategory
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, ProductCategory $productCategory)
    {
        $productCategory->load(['text', 'meta.text']);
        $langs = Lang::getAllLang();
        return View::make('admin.product.category.edit', [
            'productCategory' => $productCategory,
            'langs' => $langs
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $locale
     * @param ProductCategory $productCategory
     * @param ProductCategoryService $productCategoryService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductCategoryUpdateRequest $request, $locale, ProductCategory $productCategory, ProductCategoryService $productCategoryService)
    {
        $productCategoryService->update($request, $productCategory);
        return Redirect::route('admin.product_categories.index', ['locale' => $locale])
            ->with('toast_success', trans('Category updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param ProductCategory $productCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, ProductCategory $productCategory)
    {
        $productCategory->load('meta');
        removeFile('product', $productCategory->img);
        removeFile('product', $productCategory->meta->img);
        $productCategory->delete();
        return Redirect::route('admin.product_categories.index', ['locale' => $locale])
            ->with('toast_success', trans('Category successfully removed'));
    }
}
