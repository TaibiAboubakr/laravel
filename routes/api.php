<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test', [\App\Http\Controllers\ApiController::class, 'test']);
Route::post('login', [\App\Http\Controllers\ApiAuthController::class, 'login']);
Route::prefix('user')->middleware('api_auth')->group(function(){

    Route::get('info', [\App\Http\Controllers\ApiUserController::class, 'getUserInfo']);
});
Route::get('info', [\App\Http\Controllers\ApiUserController::class, 'getUserInfo'])->middleware('api_auth');
