<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsikologDosyaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psikolog_dosya', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('psikolog_id')->unsigned();
            $table->foreign('psikolog_id')->references('id')->on('psikologs')->onDelete('cascade');
            $table->string('imagex');
            $table->softDeletes();
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
        Schema::dropIfExists('psikolog_dosya');
    }
}
