<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get all products
Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);

// Create a new product
Route::post('products/create', [App\Http\Controllers\ProductController::class, 'store']);

// Update an existing product by ID
Route::post('products/update/{id}', [App\Http\Controllers\ProductController::class, 'update']);

// Delete an existing product by ID
Route::delete('products/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
