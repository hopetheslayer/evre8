<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKatPsikologTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kat_psikolog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('psikolog_id')->unsigned();
            $table->integer('psikolog_uzman_id')->unsigned();

            $table->foreign('psikolog_uzman_id')->references('id')->on('psikolog_uzman')->onDelete('cascade');
            $table->foreign('psikolog_id')->references('id')->on('psikologs')->onDelete('cascade');
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
        Schema::dropIfExists('kat_psikolog');
    }
}
