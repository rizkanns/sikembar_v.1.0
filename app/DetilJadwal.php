<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetilJadwal extends Model
{
	protected $table = 'detil_jadwals';
    protected $fillable = ['id_kursus','id_jadwal'];
    public $incrementing = true;
    public $timestamp = true;

    public function detilkursus()
    {
    	return $this->belongsTo('App\DetilKursus', 'id_kursus', 'id_kursus');
    }

    public function jadwal()
    {
    	return $this->belongsTo('App\Jadwal', 'id_jadwal', 'id_jadwal');
    }
}
