<?php

use Illuminate\Support\Facades\Auth;
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
    | TEST Web Routes
    |--------------------------------------------------------------------------
    */

    Route::get('/index', function () {
        return view('index');
    });
    Route::get('/content', function () {
        return view('content');
    });

    Route::get('/about', function () { return view('pages.about'); });
    Route::get('/article', function () { return view('pages.article'); });
    Route::get('/card', function () { return view('pages.card'); });
    Route::get('/card2', function () { return view('pages.card2'); });
    Route::get('/cart', function () { return view('pages.cart'); });
    Route::get('/cart1', function () { return view('pages.cart1'); });
    Route::get('/cartcomplete', function () { return view('pages.cartcomplete'); });
    Route::get('/catalog', function () { return view('pages.catalog'); });
    Route::get('/catalogmain', function () { return view('pages.catalogmain'); });
    Route::get('/compare', function () { return view('pages.compare'); });
    Route::get('/contact', function () { return view('pages.contact'); });
    Route::get('/delivery', function () { return view('pages.delivery-page'); });
    Route::get('/faq', function () { return view('pages.faq'); });
    Route::get('/favorite', function () { return view('pages.favorite'); });
    Route::get('/fblist', function () { return view('pages.fblist'); });
    Route::get('/help', function () { return view('pages.help'); });
    Route::get('/lk', function () { return view('pages.lk'); });
    Route::get('/news', function () { return view('pages.news'); });
    Route::get('/orderdetails', function () { return view('pages.orderdetails'); });
    Route::get('/orderlist', function () { return view('pages.orderlist'); });
    Route::get('/policy', function () { return view('pages.policy'); });
    Route::get('/profile', function () { return view('pages.profile'); });
    Route::get('/review', function () { return view('pages.review'); });
    Route::get('/review2', function () { return view('pages.review2'); });
    Route::get('/stock', function () { return view('pages.stock'); });
    Route::get('/stock2', function () { return view('pages.stock2'); });
    Route::get('/vacancies', function () { return view('pages.vacancies'); });
    Route::get('/waitlist', function () { return view('pages.waitlist'); });
    Route::get('/warranty', function () { return view('pages.warranty'); });
    /*
    |--------------------------------------------------------------------------
    */
    Auth::routes();

    Route::group(['prefix' => 'admin'], function () {
        Voyager::routes();
    });
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
