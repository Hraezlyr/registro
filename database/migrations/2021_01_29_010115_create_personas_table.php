<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_afiliacion');
            $table->date('fecha_ingreso');
            $table->date('fecha_actualizacion');
            $table->string('cedula')->unique();
            $table->string('inss')->unique();
            $table->string('correo')->unique();
            $table->string('nombre');
            $table->string('facultad');
            $table->string('departamento');
            $table->text('direccion');
            $table->string('imagen');
            $table->string('cel_tigo')->unique()->nullable();
            $table->string('cel_claro')->unique()->nullable();
            $table->string('cel_casa')->unique()->nullable();
            $table->string('cel_trabajo')->unique()->nullable();
            $table->string('estado_civil');
            $table->string('nombre_conyugue')->nullable();
            $table->string('madre')->nullable();
            $table->string('padre')->nullable();
            $table->boolean('m_fallecida')->default(false)->nullable();
            $table->boolean('p_fallecido')->default(false)->nullable();
            $table->boolean('c_fallecido')->default(false)->nullable();
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
        Schema::dropIfExists('personas');
    }
}
