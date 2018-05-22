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

use App\User;
use App\Instrultur;
Route::get('/','PelangganController@tampilkanUIPelanggan');


// ADMIN - VIEW
Route::get('/admin-dashboard', function ()
{
    return view('admin.dashboard');
});
Route::get('/admin-pembayaran', function ()
{
    return view('admin.pembayaran');
});
Route::get('/admin-jadwal', function ()
{
    return view('admin.jadwal');
});
Route::get('/admin-pelanggan', function ()
{
    return view('admin.pelanggan');
});
Route::get('/admin-instruktur', function ()
{
    return view('admin.instruktur');
});
Route::get('/admin-mobil', function ()
{
    return view('admin.mobil');
});


Route::post('/admin/pelanggan/insert','AdminController@insertPelanggan');
Route::get('/admin/pelanggan/update/{username}', 'AdminController@updatePelanggan');
Route::get('/admin/pelanggan/delete/{username}', 'AdminController@deletePelanggan');
Route::get('/admin-pelanggan','AdminController@showPelanggan');


Route::post('/admin/mobil/insert','AdminController@insertMobil');
Route::get('/admin/mobil/update/{id}', 'AdminController@updateMobil');
Route::get('/admin/mobil/delete/{id}', 'AdminController@deleteMobil');
Route::get('/admin-mobil','AdminController@showMobil');