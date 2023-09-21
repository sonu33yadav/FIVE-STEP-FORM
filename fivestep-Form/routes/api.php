<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('add-product');
Route::get('/get-product', [App\Http\Controllers\ProductController::class, 'getproducts'])->name('get-product');
