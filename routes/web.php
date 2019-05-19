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
Route::get('/','HomeController@index')->name('home');
Route::get('/worldclock','HomeController@worldclock')->name('world.clock');
Route::get('worldclock/{country}','HomeController@countyDateAndTime')->name('country.date.time');
Route::get('contact-us','HomeController@contactUs')->name('contact.us');
//Route::get('/', function () {
//    return view('welcome');
//});
