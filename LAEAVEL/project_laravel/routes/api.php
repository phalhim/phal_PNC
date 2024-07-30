<?php

use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderProductController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\StudentController;
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

Route::get('/product/list',[ProductController::class,'index']);
Route::post('/product/create',[ProductController::class,'store']);
Route::put('/product/update/{id}',[ProductController::class,'update']);
Route::delete('/product/delete/{id}',[ProductController::class,'destroy']);
Route::get('/product/show/{id}',[ProductController::class,'show']);

Route::get('/student/list',[StudentController::class,'index']);
Route::post('/student/create',[StudentController::class,'store']);
Route::put('/student/update/{id}',[StudentController::class,'update']);
Route::delete('/student/delete/{id}',[StudentController::class,'destroy']);
Route::get('/student/show/{id}',[StudentController::class,'show']);


Route::post('/order/create',[OrderController::class,'store']);
Route::put('/order/update/{id}',[OrderController::class,'update']);
Route::delete('/order/delete/{id}',[OrderController::class,'destroy']);
Route::get('/order/show/{id}',[OrderController::class,'show']);
Route::get('/order/list',[OrderController::class,'index']);

// Oreder_product
Route::post('/order_product/create',[OrderProductController::class,'store']);
Route::put('/order_product/update/{id}',[OrderProductController::class,'update']);
Route::delete('/order_product/delete/{id}',[OrderProductController::class,'destroy']);
Route::get('/order_product/show/{id}',[OrderProductController::class,'show']);
Route::get('/order_product/list',[OrderProductController::class,'index']);
