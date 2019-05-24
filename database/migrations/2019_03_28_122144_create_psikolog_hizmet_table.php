<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsikologHizmetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psikolog_hizmet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('psikolog_id')->unsigned();
            $table->foreign('psikolog_id')->references('id')->on('psikologs');
            $table->integer('hizmet_id')->unsigned();
            $table->foreign('hizmet_id')->references('id')->on('hizmets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('psikolog_hizmet');
    }
}
