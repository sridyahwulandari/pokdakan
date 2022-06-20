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
        Schema::create('produk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('kategori_id');
            $table->string('jenis_ikan');
            $table->string('slug');
            $table->string('harga');
            $table->integer('stok');
            $table->text('alamat');
            $table->string('notlpn');
            $table->text('deskripsi');
            $table->text('gambar_produk');
            $table->text('video_produk');
            $table->integer('status');
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
        Schema::dropIfExists('produk');
    }
}
