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
use App\User;
use DB;

class InstrukturController extends Controller
{
	//evaluasi pelanggan
	public function insertEvaluasiPelanggan(Request $request)
	{
		$evalpelanggan = new EvaluasiPelanggan;
		$evalpelanggan->id_evalpelanggan = $request->input('id_evalpelanggan');
		$evalpelanggan->menyalakan_mesin = $request->input('menyalakan_mesin');
		$evalpelanggan->perpindahan_gigi = $request->input('perpindahan_gigi');
		$evalpelanggan->melakukan_rem = $request->input('melakukan_rem');
		$evalpelanggan->haluan = $request->input('haluan');
		$evalpelanggan->parkir_lurus = $request->input('parkir_lurus');
		$evalpelanggan->parkir_sirip = $request->input('parkir_sirip');
		$evalpelanggan->parkir_paralel = $request->input('parkir_paralel');
		$evalpelanggan->nilai_akhir = $request->input('nilai_akhir');
		$evalpelanggan->save();
		return redirect('/instruktur-evaluasi');
	}
	public function showEvaluasiPelanggan()
	{
        $evalpelanggan = DB::table('evaluasi_pelanggans')->get();
		return view('instruktur.evaluasi', ['evalpelanggan'=>$evalpelanggan]);
    }

    //jadwal
    public function showJadwal()
	{
        $jadwal = DB::table('jadwals')->get();
		return view('instruktur.jadwal', ['jadwal'=>$jadwal]);
    }

    //pelanggan
    public function showPelanggan()
	{
        $pelanggan = DB::table('users')->get();
		return view('instruktur.pelanggan', ['pelanggan'=>$pelanggan]);
    }
}