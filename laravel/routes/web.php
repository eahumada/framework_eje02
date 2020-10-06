<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::view('vista1','login');

Route::get('login', function() {
    return view('login');
})->name('login');

Route::get('record', function() {
    return view('recordProduct');
})->name('record');

Route::get('search', function() {
    return view('searchProduct');
})->name('search');

Route::get('delete', function() {
    return view('deleteProduct');
})->name('delete');

Route::get('update', function() {
    return view('updateProduct');
})->name('update');
