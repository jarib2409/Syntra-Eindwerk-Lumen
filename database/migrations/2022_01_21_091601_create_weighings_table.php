<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeighingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weighings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catId', false, true);
            $table->integer('shelterId', false, true);
            $table->integer('weight');
            $table->timestamps();
            $table->foreign('catId')->references('id')->on('cats')->onDelete('cascade');
            $table->foreign('shelterId')->references('id')->on('shelters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weighings');
    }
}
