<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/data', function () {
//     return view('data');
// });

Route::get('/viewData', [UserController::class,'showData']) ->name('viewData');

Route::get('/createData',[UserController::class,'createData'])->name('createData');

Route::get('/update',[UserController::class,'updateData'])->name('update');

Route::get('/delete/{id}',[UserController::class,'deleteData'])->name('delete');



