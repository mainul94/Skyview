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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('ajax-login', 'Auth\\LoginController@authenticate');


Route::namespace('Admin')->prefix('admin/hidden')->group(function () {
    Route::get('bootinfo', 'Boot@get_bootinfo');
});

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('/{first?}/{second?}/{third?}/{fourth?}/{fifth?}', function () {
       return view('admin.base');
    });
});