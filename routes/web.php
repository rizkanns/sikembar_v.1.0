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
Route::get('/daftar', function ()
{
    return view('pelanggan.form');
});
Route::get('/profilw', function ()
{
    return view('pelanggan.dashboard');
});
Route::get('/admin', function ()
{
    return view('admin.pelanggan');
});


Route::post('/admin/pelanggan/insert','AdminController@insertPelanggan');