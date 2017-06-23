<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Semibecas.solicitantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idpostulante')->references('id')->on('postulante');
            $table->integer('iduser')->references('id')->on('users');
            $table->mediumText('observaciones');
            $table->boolean('otorga');
            $table->enum('descuento',['SEMIBECA','BECA INTEGRAL','DENEGADO']);
            $table->integer('promedio');
            $table->string('proceso');
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
        Schema::dropIfExists('Semibecas.solicitantes');
    }
}
