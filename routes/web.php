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

Route::get('tugas4', function () {
    return view('tugas4js') ;
});

Route::get('praktikum2', function () {
    return view('praktikum2js') ;
});

//melalui controller
Route::get('ets2021',"ViewController@showETS") ;

Route::get('greetings',"ViewController@showGreetings") ;

Route::post('sayhi',"ViewController@sayHi") ;

Route::get('barronstranslate',"ViewController@showTugasphp") ;

Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');


Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');
Route::get('/pendapatan/cari','PendapatanController@cari');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');
Route::get('/absen/detail/{id}','AbsenController@view');

Route::get('/mobil','MobilController@index');
Route::get('/mobil/tambah','MobilController@tambah');
Route::post('/mobil/store','MobilController@store');
Route::get('/mobil/edit/{id}','MobilController@edit');
Route::post('/mobil/update','MobilController@update');
Route::get('/mobil/hapus/{id}','MobilController@hapus');
Route::get('/mobil/cari','MobilController@cari');
Route::get('/mobil/detail/{id}','MobilController@view');

Route::get('/karyawan1','Karyawan1Controller@index');
Route::get('/karyawan1/tambah','Karyawan1Controller@tambah');
Route::post('/karyawan1/store','Karyawan1Controller@store');
Route::get('/karyawan1/edit/{id}','Karyawan1Controller@edit');
Route::post('/karyawan1/update','Karyawan1Controller@update');
Route::get('/karyawan1/hapus/{id}','Karyawan1Controller@hapus');
Route::get('/karyawan1/cari','Karyawan1Controller@cari');
Route::get('/karyawan1/detail/{id}','Karyawan1Controller@view');