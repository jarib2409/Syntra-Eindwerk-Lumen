<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->date('dateOfBirth');
            $table->string('gender');
            $table->string('street');
            $table->string('number');
            $table->string('city');
            $table->string('zipCode');
            $table->string('phoneNumber');
            $table->string('housing');
            $table->integer('ownGarden');
            $table->integer('ownPen');
            $table->integer('experiencedCats');
            $table->integer('experiencedPets');
            $table->integer('hasVet');
            $table->integer('allowedOutside');
            $table->integer('hoursAlone');
            $table->string('preferences');
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
        Schema::dropIfExists('adopters');
    }
}
