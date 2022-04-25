<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_skills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mitra_id');
            $table->unsignedBigInteger('skill_id');
            $table->timestamps();

            $table->foreign('mitra_id')->references('id')->on('mitras')->onDelete('cascade');
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_skills');
    }
}
