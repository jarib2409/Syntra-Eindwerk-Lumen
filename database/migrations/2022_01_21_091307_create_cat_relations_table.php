<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catRelations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat1Id', false, true);
            $table->integer('cat2Id', false, true);
            $table->string('relation');
            $table->timestamps();
            $table->foreign('cat1Id')->references('id')->on('cats')->onDelete('cascade');
            $table->foreign('cat2Id')->references('id')->on('cats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catRelations');
    }
}
