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
Route::get('/home', 'HomeController@index');
