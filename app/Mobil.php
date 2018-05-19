<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobils';
    protected $primaryKey = 'id';
    protected $fillable = ['no_pol','id_paket','merk_mobil','jenis_mesin','warna_mesin','tahun_mesin'];
    public $incrementing = true;
    public $timestamp = true;

    public function mobil()
    {
    	return $this->hasone('App\Mobil', 'no_pol', 'id');
    }

    public function paket()
    {
    	return $this->belongsTo('App\Paket', 'id_paket', 'id_paket');
    }
}
