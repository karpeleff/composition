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

    Route::post('/notes/search','NotesController@search');
    Route::resource('energy', 'EnergyController');
    Route::resource('fuel', 'FuelController');
    Route::resource('notes', 'NotesController');

Route::get('/doc', 'DocsController@index');

Route::get('/createdoc', 'DocsController@create');

    Route::get('/', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
