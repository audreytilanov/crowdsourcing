<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketJasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_jasas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('jasa_id');
            $table->timestamps();

            $table->foreign('jasa_id')->references('id')->on('jasas')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_jasas');
    }
}
