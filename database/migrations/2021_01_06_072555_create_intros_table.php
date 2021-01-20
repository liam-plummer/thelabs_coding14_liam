<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intros', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('image1');
            $table->string('image2');
            $table->string('nav1');
            $table->string('nav2');
            $table->string('nav3');
            $table->string('nav4');
            $table->text('slogan');
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
        Schema::dropIfExists('intros');
    }
}
