<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluasiInstruktur extends Model
{
    protected $table = 'evaluasi_instruktur';
    protected $primaryKey = 'id';
    protected $fillable = ['id_kursus','penilaian','kritik_saran'];
    public $incrementing = true;
    public $timestamp = true;

    public function evalins()
    {
    	return $this->hasone('App\EvaluasiInstruktur', 'id_evalinstruktur', 'id');
    }

    public function kursus()
    {
    	return $this->belongsTo('App\DetilKursus', 'id_kursus', 'id_kursus');
    }
}
