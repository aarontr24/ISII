<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlberguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albergues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('address',100);
            $table->string('district',100);
            $table->integer('encargado');
            $table->integer('DNI');
            $table->integer('movil');
            $table->string('email');
            $table->integer('cantidad');
            $table->integer('desparasit');
            $table->integer('vacunas');
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
        Schema::dropIfExists('albergues');
    }
}
