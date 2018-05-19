<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluasiPelanggan extends Model
{
    protected $table = 'evaluasi_pelanggans';
    protected $primaryKey = 'id';
    protected $fillable = ['menyalakan_mesin','perpindahan_gigi','melakukan_rem','haluan','parkir_lurus','parkir_sirip','parkir_paralel','nilai_akhir'];
    public $incrementing = true;
    public $timestamp = true;

    public function evaluser()
    {
    	return $this->hasone('App\EvaluasiPelanggan', 'id_evalpelanggan', 'id');
    }

}
