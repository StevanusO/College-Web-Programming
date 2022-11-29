<?php

use App\Http\Controllers\BookCategoriesController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublisherController;
use App\Models\BookCategories;
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

Route::get('/', [BookController::class, 'index']);
Route::get('/Homepage', [BookController::class, 'index'])->name('Home');
Route::post('/Homepage/Detail/{id}', [BookController::class, 'getBookDetail'])->name('getBookDetail');
Route::post('/Category/{id}', [BookController::class, 'getBookCategory'])->name('getBookByCategory');
Route::get('/Publisher', [PublisherController::class, 'getPublish'])->name('getPublisherPage');
Route::get('/Publisher/Detail/{id}', [PublisherController::class, 'getPublishBook'])->name('getPublisherBookPage');
Route::get('/Contact', [PublisherController::class, 'indexContact'])->name('Contact');
