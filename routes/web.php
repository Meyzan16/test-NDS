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
    return view('soal_1');
});
Route::get('/soal2', function () {
    return view('soal_2');
});
Route::get('/soal3', function () {
    return view('soal_3');
});
Route::get('/soal4', function () {
    return view('soal_4');
});
Route::get('/soal5', function () {
    return view('soal_5');
});
