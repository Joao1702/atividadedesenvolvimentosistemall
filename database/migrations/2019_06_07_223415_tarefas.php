<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('usuario');
            $table->string('privacidade');
            $table->string('descricao');
            $table->string('tipo');
            $table->string('status');
            $table->string('data');
            $table->bigInteger('id_tipo')->unsigned();
            $table->foreign('id_tipo')->references('id')->on('tipo_de_tarefa');
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
        Schema::dropIfExists('tarefa');
    }
}
