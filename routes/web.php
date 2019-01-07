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

Route::get('about-us', 'PagesController@index')->name('about_us');
Route::get('guiders', 'GuiderController@index')->name('guiders');
Route::get('trips', 'TripController@index')->name('trips');
Route::get('trip-detail', 'TripController@show')->name('trip_detail');




Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
