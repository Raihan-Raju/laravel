<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/create', [PostController::class, 'create']);
Route::get('/view', [PostController::class, 'view']);
Route::get('/home', [PostController::class, 'home']);
Route::post('/store', [PostController::class, 'filestore'])->name('store');
