<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buka_kelas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_user_guru');
            $table->string('tingkat_pendidikan');
            $table->string('kelas');
            $table->string('mata_pelajaran');
            $table->string('biaya');
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
        Schema::dropIfExists('buka_kelas');
    }
}
