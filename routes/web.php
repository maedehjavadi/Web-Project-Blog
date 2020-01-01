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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{user}', 'HomeController@show')->name('home');

Route::get('/p/create', 'recordscontroller@create');
Route::post('/p', 'RecordsController@store');
Route::get('/p/{post}', 'RecordsController@show');
Route::get('/p/{post}/edit', 'RecordsController@edit');
Route::patch('/p/{post}', 'RecordsController@update');

//Route::get('/p/{post}' , 'recordscontroller@show');