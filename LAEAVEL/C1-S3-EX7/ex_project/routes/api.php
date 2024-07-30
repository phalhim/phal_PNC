<?php

use App\Http\Controllers\Api\SportController;
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

Route::get('/category/list',[SportController::class, 'index']);
Route::post('/category/create',[SportController::class, 'store']);
Route::get('/category/show/{id}',[SportController::class,'show']);
Route::put('/category/update/{id}',[SportController::class, 'update']);
Route::delete('/category/delete/{id}',[SportController::class, 'destroy']);