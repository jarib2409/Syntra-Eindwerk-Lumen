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
            $table->id();
            $table->integer('cat1Id');
            $table->integer('cat2Id');
            $table->string('relation');
            $table->foreign('cat1Id')->references('id')->on('cat')->onDelete('cascade');
            $table->foreign('cat2Id')->references('id')->on('cat')->onDelete('cascade');
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
