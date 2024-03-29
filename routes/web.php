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

Route::get('sell-form/store/data.png','SellFormController@store');
Route::resource('sell-form','SellFormController');

//Route::get('sell-form/update/{id}/data.png','SellFormController@update');
Auth::routes();

Route::get('/home', function () {
    return redirect('sell-form');
});