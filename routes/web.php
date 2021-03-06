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

Route::get('/reservation/status', 'Guest\ReservationController@readStatus')->name('guest.reservation.status');
Route::get('/reservation/{type}/form', 'Guest\ReservationController@showForm')->name('guest.reservation.form');
Route::post('/reservation/{type}/amount', 'Guest\ReservationController@showFormAmount')->name('guest.reservation.formAmount');
Route::post('/reservation/{type}/confirm', 'Guest\ReservationController@showFormConfirm')->name('guest.reservation.formConfirm');
Route::post('/reservation/{type}/reserve', 'Guest\ReservationController@reserve')->name('guest.reservation.reserve');

Route::get('auth/login', 'Auth\LoginController@showLoginForm')->name('auth.login');
Route::post('auth/login', 'Auth\LoginController@login')->name('auth.login');
Route::get('auth/logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('index', 'Admin\DashboardController@index')->name('admin.dashboard.index');
    Route::get('reservation', 'Admin\ReservationController@read')->name('admin.reservation.read');
    Route::get('reservation/{id}', 'Admin\ReservationController@detail')->name('admin.reservation.detail');
    Route::post('reservation/{id}/action', 'Admin\ReservationController@action')->name('admin.reservation.action');

    Route::get('item/create', 'Admin\ItemController@create')->name('admin.item.create');
    Route::post('item/create', 'Admin\ItemController@store')->name('admin.item.store');
    Route::get('item/read', 'Admin\ItemController@read')->name('admin.item.read');
    Route::get('item/edit/{id}', 'Admin\ItemController@edit')->name('admin.item.edit');
    Route::post('item/edit/{id}', 'Admin\ItemController@update')->name('admin.item.update');
    Route::get('item/delete/{id}', 'Admin\ItemController@delete')->name('admin.item.delete');
    Route::post('item/delete/{id}', 'Admin\ItemController@destroy')->name('admin.item.destroy');
});

Route::get('test/adminlte', function () {
    return view('template.adminlte.test');
});
