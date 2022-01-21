<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdopterRoommatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopterRoommates', function (Blueprint $table) {
            $table->id();
            $table->integer('adopterId');
            $table->string('relation');
            $table->integer('age');
            $table->integer('allergic');
            $table->integer('permission');
            $table->foreign('adopterId')->references('id')->on('adopters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adopterRoommates');
    }
}
