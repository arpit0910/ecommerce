<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeaderSliderController;
use App\Http\Controllers\PromocodeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/product-index', [FrontendController::class, 'product'])->name('frontend.product');
Route::get('/shop', [FrontendController::class, 'shop'])->name('frontend.shop');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('frontend.wishlist');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('frontend.aboutUs');
Route::get('/cart', [FrontendController::class, 'cart'])->name('frontend.cart');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('frontend.checkout');
Route::get('/profile', [FrontendController::class, 'profile'])->name('frontend.profile');
Route::get('/order-tracking', [FrontendController::class, 'orderTracking'])->name('frontend.orderTracking');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Category Routes
Route::resource('category', CategoryController::class);
Route::post('category/toggleStatus', [CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');

// Sub Category Routes
Route::resource('subcategory', SubCategoryController::class);
Route::post('subcategory/toggleStatus', [SubCategoryController::class, 'toggleStatus'])->name('subcategory.toggleStatus');

//Brand Routes
Route::resource('brand', BrandController::class);
Route::post('brand/toggleStatus', [BrandController::class, 'toggleStatus'])->name('brand.toggleStatus');

//Promocodes Routes
Route::resource('promocode', PromocodeController::class);
Route::post('promocode/toggleStatus', [PromocodeController::class, 'toggleStatus'])->name('promocode.toggleStatus');

// Header Slider Route
Route::resource('header-slider', HeaderSliderController::class);

//Product Routes
Route::resource('product', ProductController::class);
Route::post('product/toggleStatus', [ProductController::class, 'toggleStatus'])->name('product.toggleStatus');

require __DIR__ . '/auth.php';
