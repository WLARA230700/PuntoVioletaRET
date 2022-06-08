<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTalleres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_talleres', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('fecha');
            $table->string('lugar');
            $table->string('descripcion');
            $table->string('portada');
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
        Schema::dropIfExists('table_talleres');
    }
}
