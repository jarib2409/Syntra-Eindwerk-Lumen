<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFosterPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fosterPets', function (Blueprint $table) {
            $table->id();
            $table->integer('fosterFamilyId');
            $table->string('species');
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
        Schema::dropIfExists('fosterPets');
    }
}
