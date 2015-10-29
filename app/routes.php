<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any('/', 'HotelController@Index');
Route::any('/create', 'HotelController@show');
Route::any('/edit/{id}', 'HotelController@show');
Route::any('/save', 'HotelController@SavePost');
Route::any('/search/{value}/{sort}', 'HotelController@Search');
Route::controller('', 'HotelController');
