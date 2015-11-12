<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutoresEIvrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores_e_livros', function (Blueprint $table) {
            
            $table->increments('id');
            
            $table->integer('autor_id')->unsigned();
            $table->integer('livro_id')->unsigned();
            
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autores');
            $table->foreign('livro_id')->references('id')->on('livros');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('autores_e_livros');
    }
}
