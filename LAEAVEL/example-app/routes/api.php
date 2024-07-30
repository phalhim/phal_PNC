<?php

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

Route::get('/user/list',[UserController:: class, 'index']);
Route::post('/user/create',[UserController:: class, 'store']);
Route::get('/user/show/{id}',[UserController:: class, 'show']);
Route::put('/user/update/{id}',[UserController:: class, 'update']);
Route::delete('/user/delete/{id}',[UserController:: class, 'destroy']);