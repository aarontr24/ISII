<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FichaAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pet_id')->unsigned()->index();
            $table->string('names',100);
            $table->string('lastname',100);
            $table->string('address',100);
            $table->string('district',100);
            $table->integer('movil');
            $table->integer('phone');
            $table->date('birthday');
            $table->integer('DNI');
            $table->string('email');
            $table->string('estcivil',50);
            $table->string('ocupacion',100);
            $table->string('labora',100);
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
        Schema::dropIfExists('fichas');
    }
}
