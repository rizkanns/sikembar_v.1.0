<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $fillable = ['id_kursus','jenis_atm','no_rek','nama_pembayar','total_bayar','tanggal_bayar'];
    public $incrementing = true;
    public $timestamp = true;

    public function pembayaran()
    {
    	return $this->hasone('App\Pembayaran', 'id_pembayaran', 'id');
    }

    public function kursus()
    {
    	return $this->belongsTo('App\DetlKursus', 'id_kursus', 'id_kursus');
    }
}
