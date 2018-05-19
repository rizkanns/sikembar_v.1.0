<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetilKursus extends Model
{
    protected $table = 'detil_kursuses';
    protected $primaryKey = 'id';
    protected $fillable = ['id_pembayaran','id_evaluasi','id_evalinstruktur','id_paket','username','tanggal_kursus','status_bayar'];
    public $incrementing = true;
    public $timestamp = true;

    public function detilkursus()
    {
    	return $this->hasmany('App\DetilKursus', 'id_kursus', 'id');
    }

    public function pembayaran()
    {
    	return $this->belongsTo('App\Pembayaran', 'id_pembayaran', 'id_pembayaran');
    }

    public function evaluser()
    {
    	return $this->belongsTo('App\EvaluasiPelanggan', 'id_evalpelanggan', 'id_evalpelanggan');
    }

    public function evalins()
    {
    	return $this->belongsTo('App\EvaluasiInstruktur', 'id_evalinstruktur', 'id_evalinstruktur');
    }

        public function paket()
    {
    	return $this->belongsTo('App\Paket', 'id_paket', 'id_paket');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'username', 'username');
    }
}
