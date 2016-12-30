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

Route::get('/','IndexPageController@index');

Route::get('/users/{id}/history', 'UserController@getAllBinaryOptions');

Route::get('/currencies','CurrenciesController@showAll');

Route::get('/currencies/{id}','CurrenciesController@showById');

Route::get('/refresh','ScheduleActionController@refreshRates');


