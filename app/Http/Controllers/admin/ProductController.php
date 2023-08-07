<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Lang;
use App\Models\Product;
use App\Models\ProductSubCategory;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @return \Illuminate\Contracts\View\View
     */
    public function index($locale)
    {
        $products = Product::getProductWithCategory($locale);
        return View::make('admin.product.index', [
            'products' => $products
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
        $subCategories = ProductSubCategory::getActiveSubCategories($locale);
        $langs = Lang::getAllLang();
        return View::make('admin.product.create', [
            'subCategories' => $subCategories,
            'langs' => $langs
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $locale
     * @param ProductService $productService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductStoreRequest $request, $locale, ProductService $productService)
    {
        $productService->store($request);
        return Redirect::route('admin.products.index', ['locale' => $locale])
            ->with('toast_success', trans('Product added successfully'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $locale
     * @param Product $product
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($locale, Product $product)
    {
        $subCategories = ProductSubCategory::getActiveSubCategories($locale);
        $langs = Lang::getAllLang();
        $product->load(['text', 'gallery', 'meta.text']);
        return View::make('admin.product.edit', [
            'langs' => $langs,
            'subCategories' => $subCategories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductUpdateRequest $request
     * @param $locale
     * @param Product $product
     * @param ProductService $productService
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request, $locale, Product $product, ProductService $productService)
    {
        $productService->update($request, $product);
        return Redirect::route('admin.products.index', ['locale' => $locale])
            ->with('toast_success', trans('Product edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $locale
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($locale, Product $product)
    {
        $product->load(['meta', 'gallery']);
        removeFile('product', $product->img);
        removeFile('product', $product->meta->img);
        removeFile('product', $product->gallery()->pluck('img')->toArray());
        $product->delete();
        return Redirect::route('admin.products.index', ['locale' => $locale])
            ->with('toast_success', trans('Product removed'));

    }
}
