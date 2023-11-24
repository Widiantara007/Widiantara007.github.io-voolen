<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.index');
})->name('index');
Route::get('/about', function () {
    return view('layouts.about');
})->name('about');
Route::get('/activities', function () {
    return view('layouts.activities');
})->name('activities');
Route::get('/goods', function () {
    return view('layouts.goods');
})->name('goods');
Route::get('/contact', function () {
    return view('layouts.contact');
})->name('contact');
Route::get('/clients', function () {
    return view('layouts.clients');
})->name('clients');