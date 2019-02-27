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


Route::get('eventos/create', 'EventosController@getCreate');


Route::group(['middleware' => 'auth'], function(){

    Route::get('/', 'HomeController@index');

    Route::group(['prefix' => 'eventos'], function(){

        Route::get('/', 'EventosController@getIndex');

        Route::post('create', 'EventosController@postCreate');


    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

