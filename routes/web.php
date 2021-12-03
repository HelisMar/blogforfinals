<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
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

Route::get('/', [BlogController::class, 'home']);


Route::get('/blogs', [BlogController::class, 'index']);


Route::get('/blog/{blog}', [\App\Http\Controllers\BlogController::class, 'show']);
Route::get('/blog/{blog}', [\App\Http\Controllers\BlogController::class, 'show2']);
Route::get('/edit/{blog}', [\App\Http\Controllers\BlogController::class, 'edit']);
Route::put('/edit/{blog}', [\App\Http\Controllers\BlogController::class, 'update']);
Route::get('/admin', [\App\Http\Controllers\BlogController::class, 'create']);
Route::post('/admin', [\App\Http\Controllers\BlogController::class, 'store']);


