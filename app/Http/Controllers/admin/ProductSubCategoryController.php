<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSubCategoryStoreRequest;
use App\Http\Requests\ProductSubCategoryUpdateRequest;
use App\Models\Lang;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Services\ProductSubCategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ProductSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function index($locale)
    {
        $subCategories = ProductSubCategory::getSubCategories($locale);
        return View::make('admin.product.sub-category.index', [
            'subCategories' => $subCategories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function create($locale)
    {
        $langs = Lang::getAllLang();
        $categories = ProductCategory::getProductCategory($locale);
        return View::make('admin.product.sub-category.create', [
            'langs' => $langs,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductSubCategoryStoreRequest $request
     * @param $locale
     * @param ProductSubCategoryService $productSubCategoryService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductSubCategoryStoreRequest $request, $locale, ProductSubCategoryService $productSubCategoryService)
    {
        $productSubCategoryService->store($request);
        return Redirect::route('admin.product_sub_categories.index', ['locale' => $locale])
            ->with('toast_success', trans('Sub Service added successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param ProductSubCategory $productSubCategory
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, ProductSubCategory $productSubCategory)
    {
        $productSubCategory->load(['text', 'meta']);
        $langs = Lang::getAllLang();
        $categories = ProductCategory::getProductCategory($locale);
        return View::make('admin.product.sub-category.edit', [
            'subCategory' => $productSubCategory,
            'categories' => $categories,
            'langs' => $langs
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductSubCategoryUpdateRequest $request
     * @param $locale
     * @param ProductSubCategory $productSubCategory
     * @param ProductSubCategoryService $productSubCategoryService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductSubCategoryUpdateRequest $request, $locale, ProductSubCategory $productSubCategory, ProductSubCategoryService $productSubCategoryService)
    {
        $productSubCategoryService->update($request, $productSubCategory);
        return Redirect::route('admin.product_sub_categories.index', ['locale' => $locale])
            ->with('toast_success', trans('Sub Service updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param ProductSubCategory $productSubCategory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, ProductSubCategory $productSubCategory)
    {
        $productSubCategory->load('meta');
        removeFile('product', $productSubCategory->img);
        removeFile('product', $productSubCategory->meta->img);
        $productSubCategory->delete();
        return Redirect::route('admin.product_sub_categories.index', ['locale' => $locale])
            ->with('toast_success', trans('Sub Service removed successfully'));
    }
}
