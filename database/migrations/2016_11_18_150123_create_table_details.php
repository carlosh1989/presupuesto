<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('decree_id')->unsigned();
            $table->integer('departure_id')->unsigned();
            $table->integer('dependence_id')->unsigned();
            $table->string('codigoPresupuestario');
            $table->double('monto', 20, 3);
            //OTORGA = 0 , RECIbE = 1
            $table->boolean('traslado');
            $table->boolean('estado');
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
        Schema::dropIfExists('details');
    }
}
