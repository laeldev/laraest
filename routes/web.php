<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'sair']);
Route::get('/usuarios/{qnt}', [SiteController::class, 'users']);