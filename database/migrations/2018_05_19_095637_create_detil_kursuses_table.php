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
            $table->foreign('id_pembayaran','detil_kursuses_fk1')->references('id_pembayaran')->on('pembayarans')->onDelete('set null')->onUpdate('cascade');
            $table->integer('id_evalpelanggan');
            $table->foreign('id_evalpelanggan','detil_kursuses_fk2')->references('id_evalpelanggan')->on('evaluasi_pelanggans')->onDelete('set null')->onUpdate('cascade');
            $table->integer('id_evalinstruktur');
            $table->foreign('id_evalinstruktur','detil_kursuses_fk3')->references('id_evalinstruktur')->on('evaluasi_instrukturs')->onDelete('set null')->onUpdate('cascade');
            $table->integer('id_paket');
            $table->foreign('id_paket','detil_kursuses_fk4')->references('id_paket')->on('pakets')->onDelete('set null')->onUpdate('cascade');
            $table->string('username');
            $table->foreign('username','detil_kursuses_fk5')->references('username')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
