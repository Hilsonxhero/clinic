<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('panel/admin')->name('panel.')->group(function () {
    Route::get('/dasboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // categories
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);

    // articles
    Route::resource('articles', App\Http\Controllers\Admin\ArticleController::class);

    // users
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);

    // members
    Route::resource('members', App\Http\Controllers\Admin\TeamController::class);

    // services
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);

    // pricing
    Route::resource('pricing', App\Http\Controllers\Admin\PricingController::class);
});
