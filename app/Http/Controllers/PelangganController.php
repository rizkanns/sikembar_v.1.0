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

	public function index()
    {
        return view('pelanggan.index');
    }
}
