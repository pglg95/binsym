<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/history', function () {
    return view('history');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/buy', function () {
    return view('buy');
});
