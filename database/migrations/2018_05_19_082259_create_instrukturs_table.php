<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstruktursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrukturs', function (Blueprint $table)
        {
            $table->string('no_induk')->primary()->unique();
            $table->string('password_instruktur');
            $table->string('nama_instruktur');
            $table->string('alamat_instruktur');
            $table->string('telp_instruktur');
            $table->string('jk_instruktur');
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
        Schema::dropIfExists('instrukturs');
    }
}
