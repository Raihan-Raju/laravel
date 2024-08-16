<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('masteruser');
});
Route::get('/home', function () {
    return view('userpage.home');
});

// Route::get('/about',Controller,about);
