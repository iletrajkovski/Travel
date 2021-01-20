<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/country', 'CountriesController@index')->name('countries');
Route::get('/country/{country:name}', 'CountriesController@show')->name('country');
Route::get('/city', 'CitiesController@index')->name('cities');
Route::get('/city/{city:name}', 'CitiesController@show')->name('city');
Route::get('/place', 'PlacesController@index')->name('places');
Route::get('/place/{place:name}', 'PlacesController@show')->name('place');
Route::post('/place/{place}/review_for_place', 'ReviewsForPlacesController@store');