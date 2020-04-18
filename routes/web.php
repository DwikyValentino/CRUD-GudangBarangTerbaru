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

Route::get('/persediaanbarang.index', 'PersediaanBarangController@index');
Route::get('/search', 'PersediaanBarangController@search');
Route::delete('/deleteall', 'PersediaanBarangController@deleteAll');
Route::resource('persediaanbarang', 'PersediaanBarangController');

// Route::get('/crud', 'CRUDController@create');
// Route::resource('cruds', 'CRUDController');

Route::get('/barangtakterpakais.index', 'BarangTakTerpakaisController@index');
Route::get('/search', 'BarangTakTerpakaisController@search');
Route::delete('/deleteall', 'BarangTakTerpakaisController@deleteAll');
Route::resource('barangtakterpakais', 'BarangTakTerpakaisController');

Route::get('/persediaanakhir.index', 'PersediaanAkhirController@index');
Route::get('/search', 'PersediaanAkhirController@search');
Route::delete('/deleteall', 'PersediaanAkhirController@deleteAll');
Route::resource('persediaanakhir', 'PersediaanAkhirController');

Route::get('/laporanbarang.index', 'LaporanBarangController@index');
Route::get('/search', 'LaporanBarangController@search');
Route::delete('/deleteall', 'LaporanBarangController@deleteAll');
Route::resource('laporanbarang', 'LaporanBarangController');
