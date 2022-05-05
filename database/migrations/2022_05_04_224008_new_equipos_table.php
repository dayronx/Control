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
        Schema::create('equipos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nombre');
            $table->string('marca');
            $table->integer('cantidad');
            $table->string('ubicacion');
            $table->longText('descripcion');
            $table->string('tipo');
            $table->string('estado');
            $table->binary('foto');
            $table->binary('pdf');
            $table->integer('prioridad');
            $table->string('mantenimiento');
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
        Schema::dropIfExists('equipos');
    }
};
