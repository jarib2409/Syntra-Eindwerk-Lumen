<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFosterRoommatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fosterRoommates', function (Blueprint $table) {
            $table->id();
            $table->integer('fosterFamilyId');
            $table->string('relation');
            $table->integer('age');
            $table->foreign('fosterFamilyId')->references('id')->on('fosterFamilies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fosterRoommates');
    }
}
