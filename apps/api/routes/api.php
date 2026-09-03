<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomersController;
use Illuminate\Support\Facades\Route;


// Route::group([
//     'prefix' => 'categories',
// ], function() {
//     Route::get('', [CategoryController::class, 'index']);
//     Route::post('', [CategoryController::class, 'store']);

//     Route::group([
//         'prefix' => '/{id}',
//     ], function() {
//         Route::get('', [CategoryController::class, 'show']);
//         Route::put('', [CategoryController::class, 'update']);
//         Route::delete('', [CategoryController::class, 'destroy']);
//     });
// });

Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('customers', CustomersController::class);
//Route::put('customers/{customer}', [CustomersController::class, 'update']);