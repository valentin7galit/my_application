<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\BlogsApiController;
use App\Http\Controllers\Api\ArticlesApiController;
use App\Http\Controllers\Api\AuthorsApiController;
use App\Http\Controllers\Api\CategoriesApiController;
use App\Http\Controllers\Api\TagsApiController;
use App\Http\Controllers\Api\ImagesApiController;
use App\Http\Controllers\Api\GalleriesApiController;
use App\Http\Controllers\Api\ProductsMenApiController;
use App\Http\Controllers\Api\ProductsWomanApiController;
use App\Http\Controllers\Api\ProductsKidApiController;
use App\Http\Controllers\Api\ProductsApiController;
use App\Http\Controllers\Api\ProductsColourApiController;
use App\Http\Controllers\Api\ProductsGalleryApiController;
use App\Http\Controllers\Api\ProductsImagesApiController;
use App\Http\Controllers\Api\ProductsSizeApiController;

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

Route::get('/', function () {
    return view('api.endpoints');
});

Route::get('/blog', [BlogsApiController::class, 'index']);
Route::post('/blog', [BlogsApiController::class, 'store']);
Route::get('/blog/articles/{id}', [ArticlesApiController::class, 'show']);
Route::put('/blog/articles/{id}', [ArticlesApiController::class, 'update']);
Route::delete('/blog/articles/{id}', [ArticlesApiController::class, 'delete']);
Route::get('/blog/authors/{id}', [AuthorsApiController::class, 'show']);
Route::delete('/blog/authors/{id}', [AuthorsApiController::class, 'delete']);
Route::get('/blog/categories/{id}', [CategoriesApiController::class, 'show']);
Route::delete('/blog/categories/{id}', [CategoriesApiController::class, 'delete']);
Route::get('/blog/tags/{id}', [TagsApiController::class, 'show']);
Route::delete('/blog/tags/{id}', [TagsApiController::class, 'delete']);
Route::get('/blog/images/{id}', [ImagesApiController::class, 'show']);
Route::delete('/blog/images/{id}', [ImagesApiController::class, 'delete']);
Route::get('/blog/galleries/{id}', [GalleriesApiController::class, 'show']);
Route::delete('/blog/galleries/{id}', [GalleriesApiController::class, 'delete']);

Route::get('/products', [ProductsApiController::class, 'index']);
Route::get('/products/mens', [ProductsMenApiController::class, 'index']);
Route::post('/products/mens', [ProductsMenApiController::class, 'store']);
Route::get('/products/women', [ProductsWomanApiController::class, 'index']);
Route::post('/products/women', [ProductsWomanApiController::class, 'store']);
Route::get('/products/kids', [ProductsKidApiController::class, 'index']);
Route::post('/products/kids', [ProductsKidApiController::class, 'store']);
Route::get('/products/{id}', [ProductsApiController::class, 'show']);
Route::put('/products/{id}', [ProductsApiController::class, 'update']);
Route::delete('/products/{id}', [ProductsApiController::class, 'delete']);
Route::get('/products/colours/all', [ProductsColourApiController::class, 'index']);
Route::get('/products/colours/{id}', [ProductsColourApiController::class, 'show']);
Route::get('/products/galleries/all', [ProductsGalleryApiController::class, 'index']);
Route::get('/products/galleries/{id}', [ProductsGalleryApiController::class, 'show']);
Route::get('/products/images/all', [ProductsImagesApiController::class, 'index']);
Route::get('/products/images/{id}', [ProductsImagesApiController::class, 'show']);
Route::get('/products/sizes/all', [ProductsSizeApiController::class, 'index']);
Route::get('/products/sizes/{id}', [ProductsSizeApiController::class, 'show']);
