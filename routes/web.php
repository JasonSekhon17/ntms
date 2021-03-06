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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::post('/dashboard', 'DashboardController@store');
});

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();
Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');


Auth::routes();

Route::get('/home', 'HomeController@index');
