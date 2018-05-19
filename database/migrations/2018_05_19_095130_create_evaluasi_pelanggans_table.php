<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluasiPelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasi_pelanggans', function (Blueprint $table) {
            $table->increments('id_evalpelanggan');
            $table->integer('menyalakan_mesin');
            $table->integer('perpindahan_gigi');
            $table->integer('melakukan_rem');
            $table->integer('haluan');
            $table->integer('parkir_lurus');
            $table->integer('parkir_sirip');
            $table->integer('parkir_paralel');
            $table->integer('nilai_akhir');
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
        Schema::dropIfExists('evaluasi_pelanggans');
    }
}
