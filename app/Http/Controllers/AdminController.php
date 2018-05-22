<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paket;
use App\User;
use DB;

class adminController extends Controller
{
    public function insertPelanggan(Request $request){
	$username = $request->input('username');
	$password = $request->input('password');
	$nama_pelanggan = $request->input('nama_pelanggan');
	$alamat_pelanggan = $request->input('alamat_pelanggan');
	$telp_pelanggan = $request->input('telp_pelanggan');
	$data=array("username"=>$username,"password"=>$password,"nama_pelanggan"=>$nama_pelanggan,"alamat_pelanggan"=>$alamat_pelanggan,"telp_pelanggan"=>$telp_pelanggan);
	DB::table('users')->insert($data);
	echo "Record inserted successfully.<br/>" ;
	}
}
