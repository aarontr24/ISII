<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id')->unsigned();
            $table->string('extension',5);
            $table->foreign("pet_id")->references("id")->on("pets");
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
        Schema::dropIfExists('pet_images');
    }
}
