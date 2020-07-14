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

// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/about', function () {
// $nama = 'Bambang Tri Handoko'; 
//     return view('about',['nama' => $nama ]);
// });

Route::get('/','PagesController@home');
Route::get('/profile','PagesController@profile');
Route::get('/mahasiswa','MahasiswaContoller@index');
Route::get('/admin','AdminController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
