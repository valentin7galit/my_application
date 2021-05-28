<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductMenController;
use App\Http\Controllers\ProductWomanController;
use App\Http\Controllers\ProductKidController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductColourController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ProductSizeController;

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

Route::get('/blog', [BlogController::class, 'indexApi']);
Route::post('/blog', [BlogController::class, 'storeApi']);
Route::get('/blog/article/{id}', [ArticleController::class, 'showApi']);
Route::put('/blog/article/{id}', [ArticleController::class, 'updateApi']);
Route::delete('/blog/article/{id}', [ArticleController::class, 'deleteApi']);
Route::get('/blog/author/{id}', [UserController::class, 'showApi']);
Route::get('/blog/category/{id}', [CategoryController::class, 'showApi']);
Route::get('/blog/tag/{id}', [TagController::class, 'showApi']);
Route::get('/blog/image/{id}', [ImageController::class, 'showApi']);
Route::get('/blog/gallery/{id}', [GalleryController::class, 'showApi']);

Route::get('/products/mens', [ProductMenController::class, 'indexApi']);
Route::get('/products/women', [ProductWomanController::class, 'indexApi']);
Route::get('/products/kids', [ProductKidController::class, 'indexApi']);
Route::get('/products/{id}', [ProductController::class, 'showApi']);
Route::put('/products/{id}', [ProductController::class, 'updateApi']);
Route::delete('/products/{id}', [ProductController::class, 'deleteApi']);
Route::get('/products/colour/all', [ProductColourController::class, 'indexApi']);
Route::get('/products/colour/{id}', [ProductColourController::class, 'showApi']);
Route::get('/products/gallery/all', [ProductGalleryController::class, 'indexApi']);
Route::get('/products/gallery/{id}', [ProductGalleryController::class, 'showApi']);
Route::get('/products/image/all', [ProductImageController::class, 'indexApi']);
Route::get('/products/image/{id}', [ProductImageController::class, 'showApi']);
Route::get('/products/size/all', [ProductSizeController::class, 'indexApi']);
Route::get('/products/size/{id}', [ProductSizeController::class, 'showApi']);
