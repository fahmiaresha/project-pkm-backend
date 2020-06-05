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
    return view('/login');
});

Route::get('/ubahpassword','Controller_Tampil@ubahpassword');


Route::get('/dashboard','Controller_Tampil@index');
Route::get('/login','Controller_Tampil@login');
Route::get('/logout','Controller_Tampil@logout');
Route::post('/loginPost','Controller_Tampil@loginPost');

Route::get('/bidang/index','Controller_Bidang@index');
Route::post('/bidang/update','Controller_Bidang@update');
Route::post('/bidang/store','Controller_Bidang@store');
Route::get('/bidang/destroy/{id}','Controller_Bidang@destroy');

Route::get('/kontak/index','Controller_Kontak@index');
Route::post('/kontak/update','Controller_Kontak@update');
Route::post('/kontak/store','Controller_Kontak@store');
Route::get('/kontak/destroy/{id}','Controller_Kontak@destroy');

Route::get('/jenis_kriteria/index','Controller_Jenis_Kriteria@index');
Route::post('/jenis_kriteria/update','Controller_Jenis_Kriteria@update');
Route::post('/jenis_kriteria/store','Controller_Jenis_Kriteria@store');
Route::get('/jenis_kriteria/destroy/{id}','Controller_Jenis_Kriteria@destroy');

Route::get('/tata_cara/index','Controller_Tata_Cara@index');
Route::post('/tata_cara/update','Controller_Tata_Cara@update');
Route::post('/tata_cara/store','Controller_Tata_Cara@store');
Route::get('/tata_cara/destroy/{id}','Controller_Tata_Cara@destroy');

Route::get('/detail_kriteria/index','Controller_Detail_Kriteria@index');
Route::post('/detail_kriteria/update','Controller_Detail_Kriteria@update');
Route::post('/detail_kriteria/store','Controller_Detail_Kriteria@store');
Route::get('/detail_kriteria/destroy/{id}{id2}','Controller_Detail_Kriteria@destroy');







