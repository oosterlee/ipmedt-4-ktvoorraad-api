<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderedProductsExport;
use App\Http\Controllers\OrderedProductsController;

use App\Http\Controllers\OrderHistoryController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PackController;

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


Route::put('/management/products', [ProductController::class, 'update']);

Route::delete('/management/products/{id}', [ProductController::class, 'delete']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function(){ //protected routes
    Route::get('user', [AuthController::class, 'user']);
    Route::put('user/update', [AuthController::class, 'update']);
    Route::put('user/password', [AuthController::class, 'reset_password']);
    Route::post('logout', [AuthController::class, 'logout']);
	Route::post('/orderproducts/store',[OrderedProductsController::class, 'store']);
});


Route::get('/pack', [PackController::class, 'index']);
Route::get('/pack/{id}', [PackController::class, 'show']);

Route::post('/pack/store', [PackController::class, 'store']);
Route::put('/pack/{id}/update', [PackController::class, 'update']);


// ADMIN PAGES
Route::get('/orderhistory/{id}', [OrderHistoryController::class, 'index']);
// Route::get('/export', [OrderedProductsExport::class, 'download']);
Route::get('/orderrequests', [OrderedProductsController::class, 'getOrderRequests']);
Route::get('/export/days', [OrderedProductsController::class, 'getEachDay']);
Route::get('/export/{date}', [OrderedProductsExport::class, 'download']);

Route::put('/orderrequests/{id}', [OrderedProductsController::class, 'update']);