<?php

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
Route::get('/nova/form/{form}', 'FormController@show')->where('form', '[0-9]+');
Route::post('/nova/form/{form}', 'FormController@store')->where('form', '[0-9]+');
