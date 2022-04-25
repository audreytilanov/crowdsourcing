<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_transaksi');
            $table->unsignedBigInteger('consumer_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('mitra_id');
            $table->string('harga_total');
            $table->timestamps();

            $table->foreign('consumer_id')->references('id')->on('consumers')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('mitra_id')->references('id')->on('mitras')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
