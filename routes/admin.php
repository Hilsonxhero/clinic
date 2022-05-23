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
    Route::resource('pricings', App\Http\Controllers\Admin\PricingController::class);

    // questions
    Route::resource('questions', App\Http\Controllers\Admin\QuestionController::class);

    // questions
    Route::resource('treatments', App\Http\Controllers\Admin\TreatmentMethodController::class);



    // page about
    Route::get('page/about', [App\Http\Controllers\Admin\PageController::class, 'about'])
        ->name('page.about.index');;
    Route::post('page/about', [App\Http\Controllers\Admin\PageController::class, 'aboutStore'])
        ->name('page.about.store');;

    // page landing
    Route::get('page/landing', [App\Http\Controllers\Admin\PageController::class, 'landing'])
        ->name('page.landing.index');
    Route::post('page/landing', [App\Http\Controllers\Admin\PageController::class, 'landingStore'])
        ->name('page.landing.store');


    // setting
    Route::get('page/setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])
        ->name('page.setting.index');
    Route::post('page/setting', [App\Http\Controllers\Admin\SettingController::class, 'update'])
        ->name('page.setting.update');
});
