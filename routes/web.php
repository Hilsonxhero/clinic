<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PageController;
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
Route::get('/', [LandingController::class, 'landing'])->name('page.landing');

Route::prefix('application')->name('application.')->group(function () {

    Route::get('/about', [PageController::class, 'about'])->name('page.about');
});
