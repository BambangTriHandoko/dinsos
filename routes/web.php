<?php

use Illuminate\Support\Facades\Route;

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








Route::get('/','PagesController@home');
Route::get('/profile','PagesController@profile');



// Route::get('/login2','AuthController@login')->name('login2');
// Route::post('/postlogin','AuthController@postlogin');
Auth::routes();
Route::get('/admin','AdminController@index')->middleware('auth');
Route::resource('/admin/pegawai', 'PegawaiController')->middleware('auth');
Route::get('/admin/pegawai/create', 'PegawaiController@create')->middleware('auth');
Route::post('/admin/pegawai/store', 'PegawaiController@store')->middleware('auth');
Route::get('/admin/pegawai/edit/{id}', 'PegawaiController@edit')->middleware('auth');
Route::put('/admin/pegawai/update/{id}', 'PegawaiController@update')->middleware('auth');
Route::get('/admin/pegawai/delete/{id}', 'PegawaiController@delete')->middleware('auth');
Route::resource('/admin/user', 'UserController')->middleware('auth');
Route::get('/admin/user/create', 'UserController@create')->middleware('auth');
Route::post('/admin/user/store', 'UserController@store')->middleware('auth');
Route::get('/admin/user/edit/{id}', 'UserController@edit')->middleware('auth');
Route::put('/admin/user/update/{id}', 'UserController@update')->middleware('auth');
Route::get('/admin/user/delete/{id}', 'UserController@delete')->middleware('auth');
Route::get('/home', 'HomeController@index');
