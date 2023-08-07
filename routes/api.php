<?php

use App\Http\Controllers\admin\AjaxController;
use App\Http\Controllers\admin\InboxController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'toggle'], function () {
    Route::post('/lang', [AjaxController::class, 'langStatus']);
    Route::post('/category', [AjaxController::class, 'categoryStatus']);
    Route::post('/post', [AjaxController::class, 'postStatus']);
    Route::post('/role', [AjaxController::class, 'roleStatus']);
    Route::post('/user', [AjaxController::class, 'userStatus']);
    Route::post('/service', [AjaxController::class, 'serviceStatus']);
    Route::post('/project', [AjaxController::class, 'projectStatus']);
    Route::post('/sub-service', [AjaxController::class, 'subServiceStatus']);
    Route::post('/page', [AjaxController::class, 'pageStatus']);
    Route::post('/customer-logo', [AjaxController::class, 'customerLogoStatus']);
    Route::post('/partner-logo', [AjaxController::class, 'partnerLogoStatus']);
    Route::post('/team', [AjaxController::class, 'teamStatus']);
    Route::post('/gallery', [AjaxController::class, 'galleryStatus']);
    Route::post('/testimonial', [AjaxController::class, 'testimonialStatus']);
    Route::post('/social', [AjaxController::class, 'socialStatus']);
    Route::post('/why_choose', [AjaxController::class, 'why_chooseStatus']);
    Route::post('/news', [AjaxController::class, 'newsStatus']);
    Route::post('/banner', [AjaxController::class, 'bannerStatus']);

    //switchers for admin
    Route::post('/faq', [AjaxController::class, 'faqStatus']);
    Route::post('/term', [AjaxController::class, 'termStatus']);
    Route::post('/policy', [AjaxController::class, 'policyStatus']);
    Route::post('/review', [AjaxController::class, 'reviewStatus']);
});

Route::get('/inbox/{id}', [InboxController::class, 'ajaxInbox']);
Route::delete('/inbox', [InboxController::class, 'ajaxDelete']);
