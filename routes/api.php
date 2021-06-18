<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class,'show']);
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'getAll']);
Route::post('/products/store', [\App\Http\Controllers\ProductController::class, 'store']);
Route::post('/product/create',[\App\Http\Controllers\ProductController::class, 'create']);