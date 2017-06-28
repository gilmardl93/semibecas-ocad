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
            $table->integer('idpostulante');
            $table->integer('iduser')->nullable();
            $table->mediumText('observaciones')->nullable();
            $table->string('otorga')->nullable();
            $table->boolean('cepreuni')->nullable();
            $table->integer('promedio')->nullable();
            $table->string('proceso')->nullable();
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
