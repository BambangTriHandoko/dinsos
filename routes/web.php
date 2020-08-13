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
Route::get('search','PagesController@search');
Route::get('/berita/kategori/{kategori_id}','PagesController@kategori');
Route::get('/berita/{artikel_id}','PagesController@berita');
Route::get('/gallery','PagesController@gallery');
Route::get('/visualisasi','PagesController@visual');
Route::get('/profile/struktur','PagesController@profile1');
Route::get('/profile/tupoksi','PagesController@profile2');
Route::get('/profile/tujuan','PagesController@profile3');
Route::get('/profile/selayangpandang','PagesController@profile4');
Route::get('/profile/pmks','PagesController@profile5');
Route::get('/profile/dasarhukum','PagesController@profile6');
Route::get('/profile/daftarpeg','PagesController@profile');
Route::get('/layanan/index','PagesController@layanan');
Route::get('/layanan/layanan1','PagesController@layanan1');
Route::get('/layanan/persyaratan1','PagesController@persyaratan1');
Route::get('/layanan/pp1','PagesController@pp1');
Route::get('/layanan/jk1','PagesController@jk1');
Route::get('/layanan/propel1','PagesController@propel1');
Route::get('/layanan/layanan2','PagesController@layanan2');
Route::get('/layanan/persyaratan2','PagesController@persyaratan2');
Route::get('/layanan/pp2','PagesController@pp2');
Route::get('/layanan/jk2','PagesController@jk2');
Route::get('/layanan/propel2','PagesController@propel2');
Route::get('/layanan/layanan3','PagesController@layanan3');
Route::get('/layanan/persyaratan3','PagesController@persyaratan3');
Route::get('/layanan/pp3','PagesController@pp3');
Route::get('/layanan/jk3','PagesController@jk3');
Route::get('/layanan/propel3','PagesController@propel3');
Route::get('/layanan/layanan4','PagesController@layanan4');
Route::get('/layanan/persyaratan4','PagesController@persyaratan4');
Route::get('/layanan/pp4','PagesController@pp4');
Route::get('/layanan/kelengkapan4','PagesController@kelengkapan4');
Route::get('/layanan/jk4','PagesController@jk4');
Route::get('/layanan/propel4','PagesController@propel4');
Route::get('/layanan/layanan5','PagesController@layanan5');
Route::get('/layanan/persyaratan5','PagesController@persyaratan5');
Route::get('/layanan/pp5','PagesController@pp5');
Route::get('/layanan/jk5','PagesController@jk5');
Route::get('/layanan/propel5','PagesController@propel5');
Route::get('/layanan/layanan6','PagesController@layanan6');
Route::get('/layanan/persyaratan6','PagesController@persyaratan6');
Route::get('/layanan/pp6','PagesController@pp6');
Route::get('/layanan/jk6','PagesController@jk6');
Route::get('/layanan/propel6','PagesController@propel6');
Route::get('/layanan/layanan7','PagesController@layanan7');
Route::get('/layanan/persyaratan7','PagesController@persyaratan7');
Route::get('/layanan/pp7','PagesController@pp7');
Route::get('/layanan/jk7','PagesController@jk7');
Route::get('/layanan/propel7','PagesController@propel7');
Route::get('/layanan/layanan8','PagesController@layanan8');
Route::get('/layanan/persyaratan8','PagesController@persyaratan8');
Route::get('/layanan/pp8','PagesController@pp8');
Route::get('/layanan/jk8','PagesController@jk8');
Route::get('/layanan/propel8','PagesController@propel8');
Route::get('/layanan/layanan9','PagesController@layanan9');
Route::get('/layanan/persyaratan9','PagesController@persyaratan9');
Route::get('/layanan/pp9','PagesController@pp9');
Route::get('/layanan/jk9','PagesController@jk9');
Route::get('/layanan/propel9','PagesController@propel9');
Route::get('/layanan/layanan10','PagesController@layanan10');
Route::get('/layanan/persyaratan10','PagesController@persyaratan10');
Route::get('/layanan/pp10','PagesController@pp10');
Route::get('/layanan/jk10','PagesController@jk10');
Route::get('/layanan/propel10','PagesController@propel10');
Route::get('/layanan/layanan11','PagesController@layanan11');
Route::get('/layanan/persyaratan11','PagesController@persyaratan11');
Route::get('/layanan/pp11','PagesController@pp11');
Route::get('/layanan/jk11','PagesController@jk11');
Route::get('/layanan/propel11','PagesController@propel11');
Route::get('/layanan/layanan12','PagesController@layanan12');
Route::get('/layanan/persyaratan12','PagesController@persyaratan12');
Route::get('/layanan/pp12','PagesController@pp12');
Route::get('/layanan/jk12','PagesController@jk12');
Route::get('/layanan/propel12','PagesController@propel12');

 Route::resource('/profile','PagesController');


 Route::get('/admin/gallery/image-gallery', 'ImageGalleryController@index')->middleware('auth');
Route::post('/admin/gallery/image-gallery', 'ImageGalleryController@upload')->middleware('auth');
Route::get('/admin/kategori/delete/{id}', 'ImageGalleryController@delete')->middleware('auth');
Auth::routes();
Route::get('/forms-admin','AdminController@index')->middleware('auth');
Route::resource('/admin/pegawai', 'PegawaiController')->middleware('auth');
Route::get('/admin/artikel/', 'ArtikelController@index')->middleware('auth');
Route::get('/admin/artikel/create', 'ArtikelController@create')->middleware('auth');
Route::post('/admin/artikel/create', 'ArtikelController@store')->middleware('auth');
Route::get('/admin/artikel/{id_artikel}', 'ArtikelController@edit')->middleware('auth');
Route::put('/admin/artikel/{id_artikel}', 'ArtikelController@update')->middleware('auth');
Route::get('/admin/artikel/delete/{id}', 'ArtikelController@destroy')->middleware('auth');

Route::get('/admin/geo/', 'JsonController@index')->middleware('auth');
Route::get('/admin/geo/edit/{id}', 'JsonController@edit')->middleware('auth');
Route::post('/admin/geo/store', 'JsonController@store')->middleware('auth');
Route::get('/admin/geo/create', 'JsonController@create')->middleware('auth');
Route::put('/admin/geo/update/{id}', 'JsonController@update')->middleware('auth');
Route::get('/admin/geo/delete/{id}', 'JsonController@delete')->middleware('auth');

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