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
    return response($request->user(), 201);
});

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/users', [App\Http\Controllers\API\testeController::class, 'index'])->middleware('auth:sanctum');
});


Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
