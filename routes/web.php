<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index']);


use App\Http\Controllers\AboutController;
Route::get('/blog', [AboutController::class, 'index']);