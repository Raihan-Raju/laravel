<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('masteruser');
});

Route::get('/', function () {
    return view('userpage.home');
});
Route::get('/about', function () {
    return view('userpage.about');
});
Route::get('/service', function () {
    return view('userpage.service');
});
Route::get('/menu', function () {
    return view('userpage.menu');
});
Route::get('/booking', function () {
    return view('userpage.booking');
});
Route::get('/team', function () {
    return view('userpage.team');
});
Route::get('/team', function () {
    return view('userpage.team');
});
Route::get('/contact', function () {
    return view('userpage.contact');
});

// -------------------------------------

Route::get('/masteradmin', function () {
    return view('masteradmin');
});
Route::get('/admin', function () {
    return view('admin_pages.admin');
});
Route::get('/dashbord', function () {
    return view('admin_pages.dashbord');
});
Route::get('/additems', function () {
    return view('admin_pages.items.additems');
});
Route::get('/manageitems', function () {
    return view('admin_pages.items.manageitems');
});

// Route::get('/about',Controller,about);
