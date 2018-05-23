<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluasiInstruktursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluasi_instrukturs', function (Blueprint $table) {
            $table->increments('id_evalinstruktur');
            $table->integer('id_kursus');
            $table->foreign('id_kursus','evaluasi_instrukturs_fk1')->references('id_kursus')->on('detil_kursuses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('penilaian');
            $table->text('kritik_saran');
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
        Schema::dropIfExists('evaluasi_instrukturs');
    }
}
