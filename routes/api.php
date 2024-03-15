<?php

use App\Http\Controllers\Api\AuthOrioksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/authtorize', [AuthOrioksController::class, 'store']);
