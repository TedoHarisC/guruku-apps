<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kelas');
            $table->string('kode_invoice');
            $table->string('waktu');
            $table->string('mata_pelajaran');
            $table->string('durasi_pertemuan');
            $table->string('hari');
            $table->string('jam');
            $table->string('buka_kelas_id');
            $table->string('user_id');
            $table->string('user_guru_id');
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
        Schema::dropIfExists('pesanans');
    }
}
