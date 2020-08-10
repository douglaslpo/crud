<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atestados', function (Blueprint $table) {
            $table->id();
            $table->integer('id_contrato')->references('id')->on('contratos');
            $table->integer('id_unidade')->references('id')->on('unidades');
            $table->foreignId('id_usuario')->references('id')->on('usuarios');
            $table->string('acompanhante');
            $table->string('obito');
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
        Schema::dropIfExists('atestados');
    }
}
