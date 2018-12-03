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

Route::get('test/adminlte', function () {
    return view('template.adminlte.test');
});
