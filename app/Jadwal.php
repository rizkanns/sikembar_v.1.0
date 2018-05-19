<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwals';
    protected $primaryKey = 'id';
    protected $fillable = ['no_induk','username','tanggal_kursus','jam_mulai','jam_selesai'];
    public $incrementing = true;
    public $timestamp = true;

    public function jadwal()
    {
    	return $this->hasmany('App\Jadwal', 'id_jadwal', 'id');
    }

    public function instruktur()
    {
    	return $this->belongsTo('App\Instruktur', 'no_induk', 'no_induk');
    }

    public function user()
    {
    	return $this->belongsTo('App\User', 'username', 'username');
    }
}
