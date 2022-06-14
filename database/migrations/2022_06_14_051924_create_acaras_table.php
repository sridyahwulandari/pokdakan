<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acaras', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('event_title',150);
            $table->string('event_start_date',15);
            $table->string('event_start_time',15);
            $table->string('event_end_date',15);
            $table->string('event_end_time',15);
            $table->text('event_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acaras');
    }
}
