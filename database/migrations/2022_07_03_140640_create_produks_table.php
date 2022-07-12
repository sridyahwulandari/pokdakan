<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->integer('supplier_id');
            $table->integer('user_id');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('jenis_pakan');
            $table->string('merk');
            $table->string('kondisi');
            $table->string('berat');
            $table->string('harga');
            $table->string('stok');
            $table->text('deskripsi');
            $table->text('gambar_produk_supplier');
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
        Schema::dropIfExists('produks');
    }
}
