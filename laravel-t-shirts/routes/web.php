<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductMenController;
use App\Http\Controllers\ProductWomanController;
use App\Http\Controllers\ProductKidController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\LoggingMiddleware;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/products/mens', [ProductMenController::class, 'index']);
Route::get('/products/women', [ProductWomanController::class, 'index']);
Route::get('/products/kids', [ProductKidController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/about-us', [AboutController::class, 'index']);

Route::get('/terms-and-conditions', [TermsController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/article/{id}', [ArticleController::class, 'show']);
Route::get('/blog/category/{id}', [CategoryController::class, 'show']);
Route::get('/blog/tag/{id}', [TagController::class, 'show']);

Route::get('/contact', ['users', function () {
    /* dd(\Cache::get('statuses')); */
    return view('pages.contactpage');
}, 'middleware' => LoggingMiddleware::class]);
Route::post('/contact', [ContactController::class, '__invoke'])->name('contact-form');
