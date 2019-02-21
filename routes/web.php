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


Route::get('/super_admin', 'HomeController@super_admin')->name('super_admin')->middleware('auth', 'super_admin');
Route::get('/admin', 'HomeController@admin')->name('admin')->middleware('auth', 'admin');

Route::get('/super_admin/add_admin', 'HomeController@add_admin')->name('add_admin')->middleware('auth', 'super_admin');

Route::post('/super_admin/add_admin/register_test', 'HomeController@register_test')->name('register_test')->middleware('auth', 'super_admin');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
