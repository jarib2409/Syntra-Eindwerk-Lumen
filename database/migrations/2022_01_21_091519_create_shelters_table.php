<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSheltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shelters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shelterName');
            $table->string('shelterPhoneNumber');
            $table->string('email');
            $table->string('hkNumber');
            $table->string('firstName');
            $table->string('lastName');
            $table->date('dateOfBirth');
            $table->string('street');
            $table->string('number');
            $table->string('city');
            $table->string('zipCode');
            $table->string('gender');
            $table->string('phoneNumber');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shelters');
    }
}
