<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Api\NewsController;
use App\Http\Controllers\Api\BusNavigationController;


Route::get('/bus-navigation', [BusNavigationController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::post('/news/detail', [NewsController::class, 'newsDetail']);
