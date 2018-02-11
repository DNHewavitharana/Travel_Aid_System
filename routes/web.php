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

Route::get('/home', 'MainController@index')->name('main');
//Route::get('/ticketBooking', 'UserPlaneReservationController@index')->name('main');
Route::resource('user_plane_reservation','UserPlaneReservationController');

Route::post('user_plane_reservation/search', 'UserPlaneReservationController@search')->name('user_plane_reservation.search');

//Route::resource('plane_shedule','UserPlaneReservationController');

