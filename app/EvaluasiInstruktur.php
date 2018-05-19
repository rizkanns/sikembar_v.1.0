<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluasiInstruktur extends Model
{
    protected $table = 'evaluasi_instrukturs';
    protected $primaryKey = 'id';
    protected $fillable = ['penilaian','kritik_saran'];
    public $incrementing = true;
    public $timestamp = true;

    public function evalins()
    {
    	return $this->hasone('App\EvaluasiInstruktur', 'id_evalinstruktur', 'id');
    }
}
