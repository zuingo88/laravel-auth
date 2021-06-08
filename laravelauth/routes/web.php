<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/initial', 'myController@initial')->name('initial');

Route::get('/squadra{id}', 'HomeController@squadra')->name('squadra');

Route::get('/squadra/create', 'HomeController@create')->name('create');
Route::post('/squadra/store', 'HomeController@store')->name('store');

Route::get('/squadra/edit{id}', 'HomeController@edit')->name('edit');
Route::post('/squadra/update{id}', 'homeController@update')->name('update');