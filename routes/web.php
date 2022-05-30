<?php

use App\Http\Controllers\Application\ArticleController;
use App\Http\Controllers\Application\ContactController;
use App\Http\Controllers\Application\TreatmentController;
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

Route::prefix('')->name('application.')->group(function () {
    Route::get('/about', [PageController::class, 'about'])->name('page.about');

    Route::get('/contacts', [PageController::class, 'contacts'])->name('page.contacts');
    Route::post('/contacts', [ContactController::class, 'store'])->name('page.contacts.store');

    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/treatments', [TreatmentController::class, 'index'])->name('treatments.index');
    Route::get('/treatments/{slug}', [TreatmentController::class, 'show'])->name('treatments.show');
});
