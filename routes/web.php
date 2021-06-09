<?php

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

Route::get('/products/{id}', [\App\Http\Controllers\ProductController::class,'show']);

Route::get('/products/delete/{id}', [\App\Http\Controllers\ProductController::class,'destroy']);

Route::get('/', function () {
    return view('welcome');
});
