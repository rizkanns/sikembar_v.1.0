<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruktur extends Model
{
    protected $table = 'instrukturs';
    protected $primaryKey = 'id';
    protected $fillable = ['no_induk','passord_instruktur','nama_instruktur','alamat_instruktur','telp_instruktur','jk_instruktur'];
    public $incrementing = true;
    public $timestamp = true;

    public function instruktur()
    {
    	return $this->hasone('App\Instruktur', 'no_induk', 'id');
    }
}
