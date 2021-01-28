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
    return view('home');
})->name('home');

Route::get('/corso', function () {
    return view('corso');
})->name('corso');

Route::get('/carriere', function () {
    return view('carriere');
})->name('carriere');

Route::get('/lezione-gratuita', function () {
    return view('lezione-gratuita');
})->name('lezione-gratuita');

Route::get('/iscriviti', function () {
    return view('iscriviti');
})->name('iscriviti');
