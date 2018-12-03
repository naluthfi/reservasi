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

Route::get('/', 'Guest\DashboardController@index')->name('guest.dashboard.index');

Route::get('/reservation/{type}/form', 'Guest\ReservationController@showForm')->name('guest.reservation.form');
Route::post('/reservation/{type}/amount', 'Guest\ReservationController@showFormAmount')->name('guest.reservation.formAmount');
Route::post('/reservation/{type}/confirm', 'Guest\ReservationController@showFormConfirm')->name('guest.reservation.formConfirm');
Route::post('/reservation/{type}/reserve', 'Guest\ReservationController@reserve')->name('guest.reservation.reserve');

Route::get('test/adminlte', function () {
    return view('template.adminlte.test');
});
