<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\BusNavigationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/bus-navigation', [BusNavigationController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
