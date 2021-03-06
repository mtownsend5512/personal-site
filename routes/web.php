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
    return view('home');
});

Route::get('/portfolio', function () {
	return view('portfolio');
});

Route::get('/open-source', 'OpenSourceController');


Route::get('/talks', function () {
	return view('talks');
});

Route::get('/writing', 'WritingController@index');

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@send');