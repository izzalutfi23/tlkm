<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Newscontroller;
use App\Http\Controllers\Dashboardcontroller;

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
