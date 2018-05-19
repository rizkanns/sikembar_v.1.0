<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'pakets';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_paket','harga_paket'];
    public $incrementing = true;
    public $timestamp = true;

    public function paket()
    {
    	return $this->hasmany('App\Paket', 'id_paket', 'id');
    }
}
