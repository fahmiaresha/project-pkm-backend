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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','Controller_Tampil@index');

Route::get('/bidang/index','Controller_Bidang@index');
Route::post('/bidang/update','Controller_Bidang@update');
Route::post('/bidang/store','Controller_Bidang@store');
Route::get('/bidang/destroy/{id}','Controller_Bidang@destroy');

Route::get('/kontak/index','Controller_Kontak@index');
Route::post('/kontak/update','Controller_Kontak@update');
Route::post('/kontak/store','Controller_Kontak@store');
Route::get('/kontak/destroy/{id}','Controller_Kontak@destroy');




