<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableImagenes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_imagenes', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_imagen', ['Infografía', 'Fotografía']);
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
        Schema::dropIfExists('table_imagenes');
    }
}
