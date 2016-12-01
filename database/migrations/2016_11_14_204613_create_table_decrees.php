<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDecrees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decrees', function (Blueprint $table) {
            $table->increments('id');
            // id de la partida

            // numero del decreto
            $table->string('numero');
            $table->string('fecha');
            //si es traspaso o credito
            $table->string('tipoMovimiento');
            $table->text('descripcion');
            // en casod e que se anule un decreto
            $table->text('observaciones');
            $table->decimal('montoTotal', 30, 2);
            //ACTIVO = 1 ,  ANULADO = 0
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
        Schema::dropIfExists('decrees');
    }
}
