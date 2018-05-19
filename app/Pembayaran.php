<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';
    protected $primaryKey = 'id';
    protected $fillable = ['jenis_atm','no_rek','nama_pembayar','total_bayar','tanggal_bayar'];
    public $incrementing = true;
    public $timestamp = true;

    public function pembayaran()
    {
    	return $this->hasone('App\Pembayaran', 'id_pembayaran', 'id');
    }
}
