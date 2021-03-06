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

Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Auth::routes();
Route::any('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::middleware(['auth'])->group(function () {
    Route::any('dashboard/postad', 'Dashboard\Ad\PostAdController@index')->name('dashboard/postad');
});


