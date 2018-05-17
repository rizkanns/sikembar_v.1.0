<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluasiPelanggan extends Model
{    
	protected $table = 'evaluasi_pelanggan';
    protected $primaryKey = 'id';
    protected $fillable = ['id_kursus','menyalakan_mesin','perpindahan_gigi','melakukan_rem','haluan','parkir_lurus','parkir_sirip','parkir_paralel','nilai_akhir'];
    public $incrementing = true;
    public $timestamp = true;

    public function evaluser()
    {
    	return $this->hasone('App\EvaluasiPelanggan', 'id_evaluasi', 'id');
    }

    public function kursus()
    {
    	return $this->belongsTo('App\DetilKursus', 'id_kursus', 'id_kursus');
    }
}
