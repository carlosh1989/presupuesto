<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTeachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dependencie_id')->unsigned();
            $table->integer('departure_id')->unsigned();
            $table->string('codigoPresupuestario');
            $table->double('inicial');
            $table->double('aumentar');
            $table->double('disminuir');
            $table->string('compromisos');
            $table->string('causados');
            $table->string('disponibilidad');
            $table->string('pagado');
            $table->string('modificado');
            $table->string('actualizado');
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
        Schema::dropIfExists('teachers');
    }
}
