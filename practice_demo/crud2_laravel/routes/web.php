<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});
Route::get('/create', [PostController::class, 'create']);
Route::POST('/filestore', [PostController::class, 'filestore'])->name('filestore');

