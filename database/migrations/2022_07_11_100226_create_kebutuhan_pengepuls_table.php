<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKebutuhanPengepulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kebutuhan_pengepuls', function (Blueprint $table) {
            $table->id();
            $table->integer('pengepul_id');
            $table->integer('pembudidaya_id');
            $table->integer('user_id');
            $table->date('tgl_kebutuhan');
            $table->string('nama');
            $table->string('jenis');
            $table->string('jumlah');
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
        Schema::dropIfExists('kebutuhan_pengepuls');
    }
}
