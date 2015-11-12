<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('titulo');
            $table->string('resumo', 30);
            $table->string('foto', 4);
            $table->string('editora');
            $table->string('isbn');
            $table->double('altura', 3, 2);
            $table->double('profundidade', 3, 2);
            $table->integer('qtd_paginas');
            $table->string('idioma', 50);
            $table->string('ano_edicao', 4);
            $table->string('largura', 3, 2);
            $table->double('valor', 9, 2);

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
        Schema::drop('livros');
    }
}
