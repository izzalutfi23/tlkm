<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Newscontroller;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\Searchcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Kategoricontroller;
use App\Http\Controllers\Kontencontroller;

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

// Home
Route::get('/', [Homecontroller::class, 'index']);
Route::get('/news', [Newscontroller::class, 'index']);
Route::get('/news/{id}', [Newscontroller::class, 'get_byid']);
Route::get('/dashboard', [Dashboardcontroller::class, 'index']);
Route::get('/dashboard/{id}', [Dashboardcontroller::class, 'getbyid']);
Route::post('/search', [Searchcontroller::class, 'search']);

Route::prefix('dashboard')->group(function () {
    Route::get('/', [Admincontroller::class, 'index']);
    Route::post('/', [Admincontroller::class, 'store']);
    Route::patch('/', [Admincontroller::class, 'update']);
    Route::get('/{id}', [Admincontroller::class, 'destroy']);
});

Route::prefix('kategori')->group(function () {
    Route::get('/', [Kategoricontroller::class, 'index']);
    Route::post('/', [Kategoricontroller::class, 'store']);
    Route::patch('/', [Kategoricontroller::class, 'update']);
    Route::get('/{id}', [Kategoricontroller::class, 'destroy']);
});

Route::prefix('konten')->group(function () {
    Route::get('/', [Kontencontroller::class, 'index']);
    Route::post('/', [Kontencontroller::class, 'store']);
    Route::patch('/', [Kontencontroller::class, 'update']);
    Route::get('/{id}', [Kontencontroller::class, 'destroy']);
});
