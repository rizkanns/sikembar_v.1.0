<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetilJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detil_jadwals', function (Blueprint $table) {
            $table->integer('id_kursus');
            $table->foreign('id_kursus','detil_jadwals_fk1')->references('id_kursus')->on('detil_kursuses')->onDelete('set null')->onUpdate('cascade');
            $table->integer('id_jadwal');
            $table->foreign('id_jadwal','detil_jadwals_fk2')->references('id_jadwal')->on('jadwals')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('detil_jadwals');
    }
}
