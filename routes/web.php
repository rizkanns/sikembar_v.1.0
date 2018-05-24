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
use App\Instruktur;
Route::get('/','PelangganController@tampilkanUIPelanggan');


// PELANGGAN
Route::post('/pelanggan/register','PelangganController@insertPelanggan');
Route::post('/pelanggan/login','PelangganController@loginPelanggan');


// ADMIN
Route::get('/admin-dashboard', function ()
{
    return view('admin.dashboard');
});
// Route::get('/admin-jadwal', function ()
// {
//     return view('admin.jadwal');
// });
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
Route::get('/admin-login', function ()
{
    return view('admin.login');
});
Route::get('/pemilik-login', function ()
{
    return view('pemilik.login');
});
Route::get('/instruktur-login', function ()
{
    return view('instruktur.login');
});

Route::post('/admin/login','AdminController@login');

Route::post('/admin/jadwal/insert','AdminController@insertJadwal');
Route::get('/admin/jadwal/update/{id}', 'AdminController@updateJadwal');
Route::get('/admin/jadwal/delete/{id}', 'AdminController@deleteJadwal');
Route::get('/admin-jadwal','AdminController@indexJadwal');

Route::post('/admin/pelanggan/insert','AdminController@insertPelanggan');
Route::get('/admin/pelanggan/update/{id}', 'AdminController@updatePelanggan');
Route::get('/admin/pelanggan/delete/{id}', 'AdminController@deletePelanggan');
Route::get('/admin-pelanggan','AdminController@showPelanggan');

Route::post('/admin/instruktur/insert','AdminController@insertInstruktur');
Route::get('/admin/instruktur/update/{id}', 'AdminController@updateInstruktur');
Route::get('/admin/instruktur/delete/{id}', 'AdminController@deleteInstruktur');
Route::get('/admin-instruktur','AdminController@showInstruktur');

Route::post('/admin/mobil/insert','AdminController@insertMobil');
Route::get('/admin/mobil/update/{id}', 'AdminController@updateMobil');
Route::get('/admin/mobil/delete/{id}', 'AdminController@deleteMobil');
Route::get('/admin-mobil','AdminController@showMobil');

// INSTRUKTUR - VIEW
Route::get('/instruktur-dashboard', function ()
{
    return view('instruktur.dashboard');
});
Route::get('/instruktur-evaluasi', function ()
{
    return view('instruktur.evaluasi');
});
Route::get('/instruktur-jadwal', function ()
{
    return view('instruktur.jadwal');
});
Route::get('/instruktur-pelanggan', function ()
{
    return view('instruktur.pelanggan');
});

Route::post('/instruktur/evaluasi/insert','InstrukturController@insertEvaluasiPelanggan');
Route::get('/instruktur-evaluasi','InstrukturController@showEvaluasiPelanggan');

Route::get('/instruktur-jadwal','InstrukturController@showJadwal');

Route::get('/instruktur-pelanggan','InstrukturController@showPelanggan');


// PEMILIK - VIEW
Route::get('/pemilik-dashboard', function ()
{
    return view('pemilik.dashboard');
});
Route::get('/pemilik-keuangan', function ()
{
    return view('pemilik.keuangan');
});
Route::get('/pemilik-penilaian', function ()
{
    return view('pemilik.penilaian');
});
Route::post('/pemilik/login','PemilikController@login');

Route::get('/pemilik-keuangan','PemilikController@showKeuangan');
Route::get('/pemilik-penilaian','PemilikController@showPenilaian');


