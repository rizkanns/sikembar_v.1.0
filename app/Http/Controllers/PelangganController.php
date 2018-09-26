<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Html\FormFacade;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\DetilJadwal;
use App\DetilKursus;
use App\EvaluasiInstruktur;
use App\EvaluasiPelanggan;
use App\Instruktur;
use App\Jadwal;
use App\Mobil;
use App\Paket;
use App\Pembayaran;
use App\User;
use DB;

class PelangganController extends Controller
{
    public function indexPaket()
    {
		
		$paket = DB::table('pakets')->get();
		return view('pelanggan.dashboard', ['paket'=>$paket]);
	}

	public function tampilkanUIPelanggan()
    {
        return view('pelanggan.index');
    }

    public function indexPelanggan()
	{
		$pelanggan = DB::table('users')->get();
		$paket = DB::table('pakets')->get();
		return view('pelanggan.index', ['pelanggan'=>$pelanggan,'paket'=>$paket]);
	}

    public function insertPelanggan(Request $request)
    {
		$pelanggan = New User;
		$pelanggan->username = $request->input('username');
		$pelanggan->password = $request->input('password');
		$pelanggan->nama_pelanggan = $request->input('nama_pelanggan');
		$pelanggan->alamat_pelanggan = $request->input('alamat_pelanggan');
		$pelanggan->telp_pelanggan = $request->input('telp_pelanggan');
		$pelanggan->jk_pelanggan = $request->input('jk_pelanggan');
		$pelanggan->save();
		return redirect('/pelanggan-form');
	}

	public function loginPelanggan(Request $request)
	{
		$pelanggan = DB::table('users')->where('username', $request->username)->get();
		if(empty($pelanggan))
		{
			return redirect('/');
		}
		return redirect('/pelanggan-form');
	}
}