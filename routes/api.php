<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'App\Http\Controllers\AuthController@logout');
});

Route::post('login/submit', 'App\Http\Controllers\AuthController@login');
    Route::post('/register/submit', 'App\Http\Controllers\AuthController@register');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });