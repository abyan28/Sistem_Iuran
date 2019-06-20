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

Route::get('halo', function(){
    return 'Coba Laravel';
});

Route::get('penghuni', 'PenghuniController@index')->name('penghuni.all');

Route::get('penghuni/formeditpenghuni/', 'PenghuniController@formeditpenghuni')->name('penghuni.formedit');

Route::post('penghuni/editpenghuni/', 'PenghuniController@editpenghuni')->name('penghuni.edit');

Route::post('penghuni/addpenghuni/', 'PenghuniController@addpenghuni')->name('penghuni.add');

Route::get('penghuni/formaddpenghuni/', 'PenghuniController@formaddpenghuni')->name('penghuni.formadd');

Route::get('penghuni/deletepenghuni/', 'PenghuniController@deletepenghuni')->name('penghuni.delete');

Route::get('penghuni/cari', 'PenghuniController@caripenghuni')->name('penghuni.cari');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
