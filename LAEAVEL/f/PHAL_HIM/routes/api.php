<?php

use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\BorrowRecordsController;
use App\Http\Controllers\Api\UserController;
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

Route::get('/user/list',[UserController::class,'index']);
Route::post('/user/create',[UserController::class,'store']);
Route::put('/user/update/{id}',[UserController::class,'update']);
Route::delete('/user/delete/{id}',[UserController::class,'destroy']);
Route::get('/user/show/{id}',[UserController::class,'show']);



Route::get('/book/list',[BookController::class,'index']);
Route::post('/book/create',[BookController::class,'store']);
Route::put('/book/update/{id}',[BookController::class,'update']);
Route::delete('/book/delete/{id}',[BookController::class,'destroy']);
Route::get('/book/show/{id}',[BookController::class,'show']);


Route::get('/BorrowRecord/list',[BorrowRecordsController::class, 'index']);
Route::post('/BorrowRecord/create',[BorrowRecordsController::class, 'store']);
Route::put('/BorrowRecord/update/{id}',[BorrowRecordsController::class, 'update']);
Route::delete('/BorrowRecord/delete/{id}',[BorrowRecordsController::class, 'destroy']);
Route::get('/BorrowRecord/show/{id}',[BorrowRecordsController::class, 'show']);