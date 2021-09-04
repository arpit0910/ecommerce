<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('category', CategoryController::class);
Route::post('category/toggleStatus', [CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');
Route::resource('subcategory', SubCategoryController::class);
Route::post('subcategory/toggleStatus', [SubCategoryController::class, 'toggleStatus'])->name('subcategory.toggleStatus');


require __DIR__ . '/auth.php';
