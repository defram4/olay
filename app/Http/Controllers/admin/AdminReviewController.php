<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReviewStoreRequest;
use App\Http\Requests\ReviewUpdateRequest;
use App\Models\Lang;
use App\Models\Review;
use App\Services\TextService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class AdminReviewController extends Controller
{
    public function index($locale)
    {
        $reviews = Review::getAllReviewsForFront($locale);

        return View::make('admin.review.index', [
            'reviews' => $reviews
        ]);
    }

    public function create($locale)
    {
        $langs = Lang::getAllLang();

        return View::make('admin.review.review.create', [
            'langs' => $langs
        ]);
    }

    public function store(ReviewStoreRequest $request)
    {
        $data = $request->validated();
        $review = Review::create();
        $review->text()->createMany($data['text']);
        return Redirect::route('admin.reviews.index', ['locale' => App::getLocale()])
            ->with(['toast_success' => trans('Review created successfully'), 'review_page' => true]);
    }

    public function edit($locale, $id)
    {
        $review = Review::findOrFail($id);
        $review->load(['text']);
        $langs = Lang::getAllLang();

        return View::make('admin.review.review.edit', compact('review', 'langs'));
    }

    public function update(ReviewUpdateRequest $request, $locale, Review $review)
    {

        $data = $request->validated();

        (New TextService())->updateText($data['text'],$review);

        return Redirect::route('admin.reviews.index', ['locale' => app()->getLocale()])->with([
            'toast_success' => trans('Review edited successfully')]);
    }

    public function destroy($locale, $id)
    {
        Review::destroy($id);
        return redirect()->route('admin.reviews.index', $locale);
    }
}
