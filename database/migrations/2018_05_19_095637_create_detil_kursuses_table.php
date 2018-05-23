<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilKursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_kursuses', function (Blueprint $table) {
            $table->increments('id_kursus');
            $table->integer('id_pembayaran');
            $table->integer('id_evalpelanggan');
            $table->integer('id_evalinstruktur');
            $table->integer('id_paket');
            $table->string('username');
            $table->date('tanggal_daftar');
            $table->integer('status_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detil_kursuses');
    }
}
