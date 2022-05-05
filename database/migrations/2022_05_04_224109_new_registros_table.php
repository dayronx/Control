<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
           
          


            $table->unsignedBigInteger('equipos_id')->nullable();
            $table->foreign('equipos_id')->references('id')->on('equipos')->nullOnDelete();


            $table->string('nombreMaquina');
            $table->string('marca');
            $table->string('tipoMaquina');
            $table->string('tipoMantenimiento');
            $table->string('ubicacion');
            $table->string('estadoFinal');
            $table->string('cambioPiezas');
            $table->binary('fotoCambio');
            
            $table->string('piezaCambiada');
            $table->string('descripcionMantenimiento');
            $table->string('nombre');
            $table->string('apellido');
            $table->bigInteger('telefono');
            $table->string('correo');
            $table->string('entidad');
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
        Schema::dropIfExists('registros');
    }
};
