<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrayectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trayectos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo',10);
            $table->string('origen',50);
            $table->string('destino',50);
            $table->date('fecha');
            $table->timestamp('hora');
            $table->integer('pasajero_id');
            $table->integer('conductor_id');


            $table->foreign('pasajero_id')->references('id')->on('pasajeros')->onDelete('cascade');
            $table->foreign('conductor_id')->references('id')->on('conductores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trayectos');
    }
}
