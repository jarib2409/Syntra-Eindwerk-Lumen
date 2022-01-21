<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdopterPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopterPets', function (Blueprint $table) {
            $table->id();
            $table->integer('adopterId');
            $table->string('species');
            $table->integer('age');
            $table->integer('usedToCats');
            $table->integer('personality');
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
        Schema::dropIfExists('adopterPets');
    }
}
