<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Semibecas.datos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->string('fecha_solicitud');
            $table->string('promedio');
            $table->boolean('cepre');
            $table->string('beneficio');
            $table->string('observaciones');
            $table->boolean('activo')->default(true);
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
        Schema::dropIfExists('Semibecas.datos');
    }
}
