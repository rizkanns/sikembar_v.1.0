<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_induk');
            $table->foreign('no_induk','jadwals_fk1')->references('no_induk')->on('instrukturs')->onDelete('set null')->onUpdate('cascade');
            $table->string('username');
            $table->foreign('username','jadwals_fk2')->references('username')->on('users')->onDelete('set null')->onUpdate('cascade');
            $table->date('tanggal_kursus');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
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
        Schema::dropIfExists('jadwals');
    }
}
