<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alamat');
            $table->string('jk');
            $table->string('telp');
            $table->string('institusi');
            $table->string('programstudi');
            $table->string('ipk');
            $table->string('bio');
            $table->string('foto');
            $table->string('user_id');
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
        Schema::dropIfExists('murids');
    }
}
