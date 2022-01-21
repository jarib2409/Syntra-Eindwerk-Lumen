<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVetVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vetVisits', function (Blueprint $table) {
            $table->id();
            $table->integer('catId');
            $table->date('date');
            $table->string('reason');
            $table->string('comments');
            $table->foreign('catId')->references('id')->on('cats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vetVisits');
    }
}
