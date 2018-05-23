<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->integer('id_kursus');
            $table->foreign('id_kursus','pelanggans_fk1')->references('id_kursus')->on('detil_kursuses')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_atm');
            $table->integer('no_rek');
            $table->string('nama_pembayar');
            $table->integer('total_bayar');
            $table->date('tanggal_bayar');
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
        Schema::dropIfExists('pembayarans');
    }
}
