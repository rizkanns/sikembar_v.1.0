<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

class pemilikController extends Controller
{
	//login
	public function login()
	{
		return redirect('/pemilik-dashboard');
	}

	//keuangan
	public function showKeuangan()
	{
		$keuangan = DB::table('pembayarans')->get();
		return view('pemilik.keuangan', ['keuangan'=>$keuangan]);
	}

	public function showPenilaian()
	{
		$penilaian = DB::table('evaluasi_instrukturs')->get();
		return view('pemilik.penilaian', ['penilaian=>$penilaian']);
	}
}