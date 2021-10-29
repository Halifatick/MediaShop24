<?php

use App\Http\Controllers\Pages\IndexPage\IndexController;
use App\Http\Controllers\Pages\PersonalAccount\ProfilePage\ProfileController;
use App\Http\Controllers\Pages\CatalogMainPage\CatalogMainController;
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

Route::post('/settings/profile/new-password', [IndexController::class, 'updateUserProfileNewPassword'])->name('updateUserProfileNewPassword');

Route::post('/settings/profile', [ProfileController::class, 'updateUserProfile'])->name('updateUserProfile');
Route::post('/settings/profile/public', [ProfileController::class, 'updateUserProfilePublic'])->name('updateUserProfilePublic');
Route::post('/settings/profile/password', [ProfileController::class, 'updateUserProfilePassword'])->name('updateUserProfilePassword');
Route::post('/settings/profile/subscription', [ProfileController::class, 'updateUserProfileSubscription'])->name('updateUserProfileSubscription');
Route::get('subcategories/{id}', [CatalogMainController::class, 'getSubcategories']);
Route::get('filters/{id}', [CatalogMainController::class, 'getFilters']);
Route::get('category-product/{id}', [CatalogMainController::class, 'getCategoryProductsNumber']);
Route::post('products/categories', [\App\Http\Controllers\Pages\CartPage\CartController::class, 'getProductsByCategory']);
Route::post('add/subscription', [\App\Http\Controllers\Pages\PersonalAccount\WaitListPage\WaitListController::class, 'addSubscription']);
