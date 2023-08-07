<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\View;

class ReviewController extends Controller
{


    public function index($locale)
    {
        $reviews = Review::getAllReviewsForFront($locale);

        return View::make('front.pages.reviews', [
            'reviews' => $reviews
        ]);
    }
}
