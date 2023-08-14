<?php

use App\Http\Controllers\admin\AdminBannerController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminFaqController;
use App\Http\Controllers\admin\AdminGalleryController;
use App\Http\Controllers\admin\AdminNewsController;
use App\Http\Controllers\admin\AdminPartnerLogoController;
use App\Http\Controllers\admin\AdminPolicyController;
use App\Http\Controllers\admin\AdminReviewController;
use App\Http\Controllers\admin\AdminSocialController;
use App\Http\Controllers\admin\AdminTeamController;
use App\Http\Controllers\admin\AdminTermController;
use App\Http\Controllers\admin\AdminTestimonialController;
use App\Http\Controllers\admin\AdminWhyChooseController;
use App\Http\Controllers\admin\AdminWidgetController;
use App\Http\Controllers\admin\BannerBigImageController;
use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\CustomerLogoController;
use App\Http\Controllers\admin\ImageController;
use App\Http\Controllers\admin\InboxController;
use App\Http\Controllers\admin\LangController;
use App\Http\Controllers\admin\NewsGalleryController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\admin\PermisionController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\PostGalleryController;
use App\Http\Controllers\admin\ProductAllDiscountController;
use App\Http\Controllers\admin\ProductCategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductDiscountController;
use App\Http\Controllers\admin\ProductGalleryController;
use App\Http\Controllers\admin\ProductSubCategoryController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ServiceGalleryController;
use App\Http\Controllers\admin\SubServiceController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\UserDetailsController;
use App\Http\Controllers\admin2\Admin2AboutPageController;
use App\Http\Controllers\admin2\Admin2BlogPageController;
use App\Http\Controllers\admin2\Admin2SingleBlogPageController;
use App\Http\Controllers\admin2\Admin2FaqPageController;
use App\Http\Controllers\admin2\Admin2HomePageController;
use App\Http\Controllers\admin2\Admin2ProjectsPageController;
use App\Http\Controllers\admin2\Admin2SingleProjectPageController;
use App\Http\Controllers\admin2\Admin2MenuFooterPageController;
use App\Http\Controllers\admin2\Admin2ServicesPageController;
use App\Http\Controllers\admin2\Admin2SingleServicePageController;
use App\Http\Controllers\admin2\Admin2ContactPageController;
use App\Http\Controllers\admin2\Admin2PolicyPageController;
use App\Http\Controllers\admin2\Admin2ProjectController;
use App\Http\Controllers\admin2\Admin2TermsPageController;
use App\Http\Controllers\front\AboutController;
use App\Http\Controllers\front\BlogFrontController;
use App\Http\Controllers\front\ContactFormController;
use App\Http\Controllers\front\FaqController;
use App\Http\Controllers\front\FrontNewsController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\PrivacyController;
use App\Http\Controllers\front\ProjectFrontController;
use App\Http\Controllers\front\ReviewController;
use App\Http\Controllers\front\ServiceFrontController;
use App\Http\Controllers\front\TermsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//User Invitation Route
Route::get('/invite/{token}', [UserController::class, 'registerByInvitation'])->name('invitation');
Route::post('/invite', [UserController::class, 'userConfirmation'])->name('process.invitation');

//Inactive User
Route::get('/inactive', function () {
    return view('admin.inactive');
})->name('inactive');

Route::redirect('/', config('app.locale'));

Route::group(['prefix' => '{locale}', 'middleware' => 'setLocale'], function () {

    // Auth
    require __DIR__ . '/auth.php';

    // Front Routes--------------------
    Route::group(['prefix' => '/'], function () {
        Route::get('/', function () {
            return view('welcome');
        });


        Route::get('/', [HomeController::class, 'index'])->name('front.index');
        Route::get('/about', [AboutController::class, 'index'])->name('front.about');
        Route::get('/faq', [FaqController::class, 'index'])->name('front.faq');
        Route::get('/privacy-policy', [PrivacyController::class, 'index'])->name('front.privacy');
        Route::get('/terms', [TermsController::class, 'index'])->name('front.terms');
        Route::get('/reviews', [ReviewController::class, 'index'])->name('front.reviews');

        Route::get('/blog', [BlogFrontController::class, 'index'])->name('front.blog');
        // Route::get('/single-blog/{slug}', [BlogFrontController::class, 'show'])->name('front.single.blog');
        Route::get('/single-news/{slug}', [BlogFrontController::class, 'show'])->name('front.single_blog');
        // Route::get('/filter-blog/{id}', [\App\Http\Controllers\front\BlogFilterController::class, 'filterBlog']);
        // Route::delete('/gallery-post/{id}', [PostGalleryController::class, 'delete'])->name('admin.gallery-post-delete');

        Route::get('/services', [ServiceFrontController::class, 'index'])->name('front.service');
        Route::get('/single-services/{slug}', [ServiceFrontController::class, 'show'])->name('front.single.service');
        Route::delete('/gallery-service/{id}', [ServiceGalleryController::class, 'delete'])->name('admin.gallery-service-delete');

        Route::get('/news', [FrontNewsController::class, 'index'])->name('front.news');
        // Route::get('/single-news/{slug}', [FrontNewsController::class, 'show'])->name('front.single_news');
        Route::delete('/gallery-news/{id}', [NewsGalleryController::class, 'delete'])->name('admin.gallery-news-delete');

        Route::get('/projects', [ProjectFrontController::class, 'index'])->name('front.project');
        Route::get('/single-projects/{slug}', [ProjectFrontController::class, 'show'])->name('front.single.project');

        Route::get('/contact', [ContactFormController::class, 'index'])->name('front.contact');
        Route::get('/thank-form', [ContactFormController::class, 'thankForm'])->name('front.contact.thank');
        Route::post('/storage-contact', [ContactFormController::class, 'store'])->name('front.contact.storage');

    });

    // Admin panel Routes ---------------------
    Route::group(['prefix' => '/admin', 'middleware' => ['auth', 'checkActive']], function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.index');
        Route::get('/inbox', [InboxController::class, 'index'])->name('admin.inbox');

        Route::group(['prefix' => 'user-info'], function () {
            Route::get('/details', [UserDetailsController::class, 'details'])
                ->name('admin.user_details_show');
            Route::post('/details', [UserDetailsController::class, 'updateDetails'])
                ->name('admin.user_details_update');
            Route::post('/password', [UserDetailsController::class, 'updatePassword'])
                ->name('admin.user_password_update');
        });

        Route::get('/support-rs', [AdminWidgetController::class, 'index'])->name('admin.widget.index');
        //Route for admin user only
        Route::group(['middleware' => 'can:is-admin'], function () {

            Route::resource('/faq', AdminFaqController::class)->names('admin.faqs');
            Route::resource('/term', AdminTermController::class)->names('admin.terms');
            Route::resource('/policy', AdminPolicyController::class)->names('admin.policies');
            Route::resource('/review', AdminReviewController::class)->names('admin.reviews');

            Route::resource('/langs', LangController::class)
                ->except(['show'])->names('admin.langs');
            Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
            Route::resource('/blog-categories', BlogCategoryController::class)
                ->except(['index', 'show'])
                ->parameters(['blog-categories' => 'blogCategory'])
                ->names('admin.blog_categories');
            Route::resource('/blog-posts', PostController::class)
                ->except(['index', 'show'])
                ->parameters(['blog-posts' => 'blogPost'])
                ->names('admin.blog_posts');
            Route::get('/permissions', [PermisionController::class, 'index'])
                ->name('admin.permissions');
            Route::resource('/roles', RoleController::class)
                ->except(['index', 'show'])
                ->names('admin.roles');
            Route::resource('/users', UserController::class)
                ->except(['index', 'show'])
                ->names('admin.users');
            Route::resource('/services', ServiceController::class)
                ->except(['show'])
                ->names('admin.services');
            Route::resource('/projects', ProjectController::class)
                ->except(['show'])
                ->names('admin.projects');
            Route::resource('/sub-services', SubServiceController::class)
                ->parameters(['sub-services' => 'subService'])
                ->except(['show'])
                ->names('admin.sub_services');
            Route::resource('/team', AdminTeamController::class)
                ->except(['show'])
                ->names('admin.teams');
            Route::resource('/gallery', AdminGalleryController::class)
                ->except(['show'])
                ->names('admin.galleries');
            Route::resource('/testimonial', AdminTestimonialController::class)
                ->except(['show'])
                ->names('admin.testimonials');
            Route::resource('/social', AdminSocialController::class)
                ->except(['show'])
                ->names('admin.socials');
            Route::resource('/why_choose', AdminWhyChooseController::class)
                ->except(['show'])
                ->names('admin.why_chooses');

            Route::resource('/banner', AdminBannerController::class)
                ->except(['show'])
                ->names('admin.banners');


            Route::resource('/product-categories', ProductCategoryController::class)
                ->parameters(['product-categories' => 'productCategory'])
                ->except(['show'])
                ->names('admin.product_categories');
            Route::resource('/product-sub-categories', ProductSubCategoryController::class)
                ->parameters(['product-sub-categories' => 'productSubCategory'])
                ->except(['show'])
                ->names('admin.product_sub_categories');
            Route::resource('/products', ProductController::class)
                ->except(['show'])
                ->names('admin.products');
            Route::delete('/gallery/{id}', [ProductGalleryController::class, 'delete'])->name('admin.gallery-delete');
            Route::resource('/pages', PageController::class)
                ->except(['show'])
                ->names('admin.pages');
            Route::resource('/contents', ContentController::class)
                ->except(['show'])
                ->names('admin.contents');
            Route::resource('/images', ImageController::class)
                ->except(['show'])
                ->names('admin.images');
            Route::resource('/customer-logos', CustomerLogoController::class)
                ->parameters(['customer-logos' => 'customerLogo'])
                ->except(['show'])
                ->names('admin.customerLogos');
            Route::resource('/partner-logos', AdminPartnerLogoController::class)
                ->parameters(['partner-logos' => 'partnerLogo'])
                ->except(['show'])
                ->names('admin.partnerLogos');
            Route::resource('/news', AdminNewsController::class)
                ->except(['show'])
                ->names('admin.newses');

        });

        Route::group(['prefix' => '/admin2'], function () {
            // create here routes for admin 2
            Route::get('/menu_footer', [Admin2MenuFooterPageController::class, 'index'])->name('admin2.menu_footer');
            Route::get('/home', [Admin2HomePageController::class, 'index'])->name('admin2.home');
            Route::get('/about', [Admin2AboutPageController::class, 'index'])->name('admin2.about');
            Route::get('/services', [Admin2ServicesPageController::class, 'index'])->name('admin2.service');
            Route::get('/single-service', [Admin2SingleServicePageController::class, 'index'])->name('admin2.single-service');
            Route::get('/projects', [Admin2ProjectsPageController::class, 'index'])->name('admin2.project');
            Route::get('/single-project', [Admin2SingleProjectPageController::class, 'index'])->name('admin2.single-project');
            Route::get('/blog', [Admin2BlogPageController::class, 'index'])->name('admin2.blog');
            Route::get('/single-blog', [Admin2SingleBlogPageController::class, 'index'])->name('admin2.single-post');
            Route::get('/contact', [Admin2ContactPageController::class, 'index'])->name('admin2.contact');
            Route::get('/faq', [Admin2FaqPageController::class, 'index'])->name('admin2.faq');
            Route::get('/terms', [Admin2TermsPageController::class, 'index'])->name('admin2.terms');
            Route::get('/policy', [Admin2PolicyPageController::class, 'index'])->name('admin2.privacy');
        });

    });
});
