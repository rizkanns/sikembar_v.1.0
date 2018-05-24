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

class adminController extends Controller
{
	public function login()
	{
		return redirect('/admin-dashboard');
	}

	// jadwal
	public function indexJadwal()
	{
		$jadwal = DB::table('jadwals')->get();
		$username = DB::table('users')->select('username','nama_pelanggan')->orderBy('nama_pelanggan')->get();
		$instruktur = DB::table('instrukturs')->select('no_induk','nama_instruktur')->orderBy('nama_instruktur')->get();
		return view('admin.jadwal', ['jadwal'=>$jadwal,'username'=>$username,'instruktur'=>$instruktur]);
	}

    public function insertJadwal(Request $request)
    {
		$jadwal = New Jadwal;
		$jadwal->id_jadwal = $request->input('id_jadwal');
		$jadwal->username = $request->input('username');
		$jadwal->no_induk = $request->input('no_induk');
		$jadwal->tanggal_kursus = $request->input('tanggal_kursus');
		$jadwal->jam_mulai = $request->input('jam_mulai');
		$jadwal->jam_selesai = $request->input('jam_selesai');
		$jadwal->save();
		return redirect('/admin-jadwal');
	}

	public function updateJadwal(Request $request, $id)
    {
    	DB::table('jadwals')->where('id_jadwal',$id)->update($request->all());
    	return redirect('/admin-jadwal');
    }

	public function deleteJadwal($id)
	{
    	DB::table('jadwals')->where('id_jadwal',$id)->delete();
    	return redirect('/admin-jadwal');
    }

    public function showJadwal()
	{
        $jadwal = DB::table('jadwals')->get();
		return view('admin.jadwal', ['jadwal'=>$jadwal]);
    }



	// pelanggan
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
		return redirect('/admin-pelanggan');
	}

	public function updatePelanggan(Request $request, $id)
    {
    	DB::table('users')->where('username',$id)->update($request->all());
    	return redirect('/admin-pelanggan');
    }

	public function deletePelanggan($id)
	{
    	DB::table('users')->where('username',$id)->delete();
    	return redirect('/admin-pelanggan');
    }

    public function showPelanggan()
	{
        $pelanggan = DB::table('users')->get();
		return view('admin.pelanggan', ['pelanggan'=>$pelanggan]);
    }



    // instruktur
    public function insertInstruktur(Request $request)
    {
		$instruktur = New Instruktur;
		$instruktur->no_induk = $request->input('no_induk');
		$instruktur->password_instruktur = $request->input('password_instruktur');
		$instruktur->nama_instruktur = $request->input('nama_instruktur');
		$instruktur->alamat_instruktur = $request->input('alamat_instruktur');
		$instruktur->telp_instruktur = $request->input('telp_instruktur');
		$instruktur->jk_instruktur = $request->input('jk_instruktur');
		$instruktur->save();
		return redirect('/admin-instruktur');
	}

	public function updateInstruktur(Request $request, $id)
    {
    	DB::table('instrukturs')->where('no_induk',$id)->update($request->all());
    	return redirect('/admin-instruktur');
    }

	public function deleteInstruktur($id)
	{
    	DB::table('instrukturs')->where('no_induk',$id)->delete();
    	return redirect('/admin-instruktur');
    }

        public function showInstruktur()
	{
        $instruktur = DB::table('instrukturs')->get();
		return view('admin.instruktur', ['instruktur'=>$instruktur]);
    }



    // mobil
    public function insertMobil(Request $request)
    {
		$mobil = New Mobil;
		$mobil->no_pol = $request->input('no_pol');
		$mobil->merk_mobil = $request->input('merk_mobil');
		$mobil->jenis_mesin = $request->input('jenis_mesin');
		$mobil->warna_mobil = $request->input('warna_mobil');
		$mobil->tahun_mesin = $request->input('tahun_mesin');
		$mobil->save();
		return redirect('/admin-mobil');
	}

	public function updateMobil(Request $request, $id)
    {
    	DB::table('mobils')->where('no_pol',$id)->update($request->all());
    	return redirect('/admin-mobil');
    }

	public function deleteMobil($id)
	{
    	DB::table('mobils')->where('no_pol',$id)->delete();
    	return redirect('/admin-mobil');
    }

        public function showMobil()
	{
        $mobil = DB::table('mobils')->get();
		return view('admin.mobil', ['mobil'=>$mobil]);
    }

}
