<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsikologsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psikologs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sname');
            $table->string('email')->unique();
            $table->string('telno');
            $table->string('password');
            $table->boolean('ban')->default(false);
            $table->boolean('verified')->default(false);
            $table->datetime('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->string('il');
            $table->string('ilce');
            $table->rememberToken();
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
        Schema::dropIfExists('psikologs');
    }
}
