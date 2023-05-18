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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::prefix('auth')->group(function(){
        Route::post('/login', [\App\Http\Controllers\Api\Auth\AuthController::class, 'login']); 
    });
    Route::middleware('auth:sanctum')->group(function () {
        Route::apiResource('products', App\Http\Controllers\Api\ProductController::class);
    });
});
