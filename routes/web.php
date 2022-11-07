<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

Route::redirect('', '/products')->name('home');

Route::controller(ProductController::class)->group(function () {
   Route::get('/products', 'index')->name('products.index');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories/{slug}/products', 'show')->name('categories.show')->where('slug', '[A-Za-z0-9-]+');
});

Route::controller(CartController::class)->prefix('cart')->name('cart.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/{id}/add', 'add')->name('add')->where('id', '[0-9-]+');
    Route::get('/{id}/increase', 'increase')->name('increase')->where('id', '[0-9-]+');
    Route::get('/{id}/decrease', 'decrease')->name('decrease')->where('id', '[0-9-]+');
    Route::get('/{id}/remove', 'remove')->name('remove')->where('id', '[0-9-]+');
});
