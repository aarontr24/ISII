<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('name',80);
            $table->date('birthday')->nullable();
            $table->date('date_aux')->nullable();
            $table->string('tipo',50);
            $table->string('race',50);
            $table->string('size',50);
            $table->integer('age');
            $table->string('color',50);
            $table->string('gender',1);
            $table->text('description');
            $table->boolean('sterilized')->nullable();
            $table->date('rage_vac')->nullable();
            $table->date('dewormed')->nullable();
            $table->boolean('vaccine')->nullable();
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
        Schema::dropIfExists('pets');
    }
}
