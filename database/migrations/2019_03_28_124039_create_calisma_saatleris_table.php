<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateCalismaSaatlerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('calisma_saatleris', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('psikolog_id')->unsigned()->nullable();
                $table->foreign('psikolog_id')->references('id')->on('psikologs')->onDelete('cascade');
                $table->date('date')->nullable();
                $table->time('start_time');
                $table->time('finish_time')->nullable();
                $table->timestamps();
                $table->softDeletes();

            });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calisma_saatleris');
    }
}
