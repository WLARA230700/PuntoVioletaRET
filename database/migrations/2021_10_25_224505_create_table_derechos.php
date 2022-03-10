<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDerechos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derechos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_derecho', ['Documentación', 'Salud', 'Educación', 'Vivienda', 'Laborales', 'Permisos Laborales']);
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('archivo');
            $table->foreignId('id_admin')->constrained('users');
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
        Schema::dropIfExists('derechos');
    }
}
