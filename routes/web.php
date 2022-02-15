<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SiteController::class, 'index']);
Route::get('/exercicios1', [SiteController::class, 'exercicios1']);
Route::get('/exercicios2', [SiteController::class, 'exercicios2']);