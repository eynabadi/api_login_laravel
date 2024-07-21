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

Route::get('/l',[\App\Http\Controllers\LoginController::class,'k']);
Route::post('/login',[\App\Http\Controllers\LoginController::class,'login']);

//check login user
Route::post('/checklogin',[\App\Http\Controllers\LoginController::class,'checklogin']);

Route::put('/updateuser/{id}',[\App\Http\Controllers\LoginController::class,'updateuser']);
