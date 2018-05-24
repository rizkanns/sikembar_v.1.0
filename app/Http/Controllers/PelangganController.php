<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Html\FormFacade;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Paket;
use DB;

class PelangganController extends Controller
{
    public function indexPaket()
    {
		
		$paket = DB::table('pakets')->get();
		return view('pelanggan.paket', ['paket'=>$paket]);
	}

	public function tampilkanUIPelanggan()
    {
        return view('pelanggan.index');
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
		return redirect('/');
	}

	public function loginPelanggan(Request $request)
	{
		$pelanggan = DB::table('users')->where('username', $request->username)->get();
		if(empty($pelanggan))
		{
			return redirect('/');
		}
		return redirect('/admin-pelanggan');
	}
}