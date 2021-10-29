<?php

use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pages\AboutPage\AboutController;
use App\Http\Controllers\Pages\ArticlePage\ArticleController;
use App\Http\Controllers\Pages\Card2Page\Card2Controller;
use App\Http\Controllers\Pages\CardPage\CardController;
use App\Http\Controllers\Pages\Cart1Page\Cart1Controller;
use App\Http\Controllers\Pages\CartCompletePage\CartCompleteController;
use App\Http\Controllers\Pages\CartPage\CartController;
use App\Http\Controllers\Pages\CatalogMainPage\CatalogMainController;
use App\Http\Controllers\Pages\CatalogPage\CatalogController;
use App\Http\Controllers\Pages\ComparePage\CompareController;
use App\Http\Controllers\Pages\ContactPage\ContactController;
use App\Http\Controllers\Pages\ContentPage\ContentController;
use App\Http\Controllers\Pages\DeliveryPage\DeliveryController;
use App\Http\Controllers\Pages\FAQPage\FAQController;
use App\Http\Controllers\Pages\FavoritePage\FavoriteController;
use App\Http\Controllers\Pages\HelpPage\HelpController;
use App\Http\Controllers\Pages\IndexPage\IndexController;
use App\Http\Controllers\Pages\NewsPage\NewsController;
use App\Http\Controllers\Pages\PersonalAccount\FBListPage\FBListController;
use App\Http\Controllers\Pages\PersonalAccount\LKPage\LKController;
use App\Http\Controllers\Pages\PersonalAccount\OrderDetailsPage\OrderDetailsController;
use App\Http\Controllers\Pages\PersonalAccount\OrderListPage\OrderListController;
use App\Http\Controllers\Pages\PersonalAccount\ProfilePage\ProfileController;
use App\Http\Controllers\Pages\PersonalAccount\WaitListPage\WaitListController;
use App\Http\Controllers\Pages\PolicyPage\PolicyController;
use App\Http\Controllers\Pages\Review2Page\Review2Controller;
use App\Http\Controllers\Pages\ReviewPage\ReviewController;
use App\Http\Controllers\Pages\Stock2Page\Stock2Controller;
use App\Http\Controllers\Pages\StockPage\StockController;
use App\Http\Controllers\Pages\VacanciesPage\VacanciesController;
use App\Http\Controllers\Pages\WarrantyPage\WarrantyController;
use App\Http\Controllers\Social\SocialController;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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
/* Группа всех пользователей */
Route::group(['middleware' => ['web']], function () {
    /*
    |--------------------------------------------------------------------------
    | Auth Route
    |--------------------------------------------------------------------------
    */
    // Login Routes...
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    // Logout Routes...
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Registration Routes...
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    // Password Reset Routes...
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

    // Password Confirmation Routes...
    Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
    Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

    // Email Verification Routes...
    Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

    /*
    |--------------------------------------------------------------------------
    | TEST Web Routes
    |--------------------------------------------------------------------------
    */

    Route::get('/', [IndexController::class, 'getAuthUser'])->name('index');
    Route::get('/content', [ContentController::class, 'getAuthUser']);


    Route::get('/about', [AboutController::class, 'getAuthUser']);
    Route::get('/article', [ArticleController::class, 'getAuthUser']);
    Route::get('/card', [CardController::class, 'getAuthUser']);
    Route::get('/card2', [Card2Controller::class, 'getAuthUser']);
    Route::get('/cart', [CartController::class, 'getAuthUser']);
    Route::get('/cart1', [Cart1Controller::class, 'getAuthUser']);
    Route::get('/cartcomplete', [CartCompleteController::class, 'getAuthUser']);
    Route::get('/catalog', [CatalogController::class, 'getAuthUser']);
    Route::get('/catalogmain', [CatalogMainController::class, 'getAuthUser']);
    Route::get('/compare', [CompareController::class, 'getAuthUser']);
    Route::get('/contact', [ContactController::class, 'getAuthUser']);
    Route::get('/delivery', [DeliveryController::class, 'getAuthUser']);
    Route::get('/faq', [FAQController::class, 'getAuthUser']);
    Route::get('/favorite', [FavoriteController::class, 'getAuthUser']);
    Route::get('/help', [HelpController::class, 'getAuthUser']);
    Route::get('/news', [NewsController::class, 'getAuthUser']);
    Route::get('/policy', [PolicyController::class, 'getAuthUser']);
    Route::get('/review', [ReviewController::class, 'getAuthUser']);
    Route::get('/review2', [Review2Controller::class, 'getAuthUser']);
    Route::get('/stock', [StockController::class, 'getAuthUser']);
    Route::get('/stock2', [Stock2Controller::class, 'getAuthUser']);
    Route::get('/vacancies', [VacanciesController::class, 'getAuthUser']);
    Route::get('/warranty', [WarrantyController::class, 'getAuthUser']);
    /* Авторизация через социальные сети */
    Route::get('/social-auth/{provider}', [SocialController::class, 'redirectToProvider'])->name('auth.social');
    Route::get('/social-auth/{provider}/callback', [SocialController::class, 'handleProviderCallback'])->name('auth.social.callback');
    /*
    |--------------------------------------------------------------------------
    */
    Route::group(['as' => 'user.', 'prefix' => '{username}', 'middleware' => ['auth']], function () {
        Route::get('lk', [LKController::class, 'getAuthUser']);
        Route::get('profile', [ProfileController::class, 'getAuthUser'])->name('profile');
        Route::get('orderdetails', [OrderDetailsController::class, 'getAuthUser']);
        Route::get('orderlist', [OrderListController::class, 'getAuthUser']);
        Route::get('fblist', [FBListController::class, 'getAuthUser']);
        Route::get('waitlist', [WaitListController::class, 'getAuthUser']);
    });
    /*
    |--------------------------------------------------------------------------
    */
    Route::get('/catalog-type={type}-id={id}',[CatalogController::class, 'getProductsByFilter']);
    Route::get('/add/cart/{id}', [CartController::class, 'addToCart']);
    Route::get('/add-to-cart', [CartController::class, 'addToCartUnique']);
    Route::get('/update/cart/{id}', [CartController::class, 'updateCart']);
    Route::post('/delete/cart', [CartController::class, 'deleteFromCart']);
    Route::post('/update/favourites/{id}', [FavoriteController::class, 'updateFavourites']);
    Route::get('/delete/favourites', [FavoriteController::class, 'deleteFavourites']);
    Route::post('/update/compared/{id}', [CompareController::class, 'updateCompared']);
    Route::get('/delete/compared', [CompareController::class, 'deleteCompared']);
    Route::get('/auth/user', [IndexController::class, 'getUser']);


    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
});
