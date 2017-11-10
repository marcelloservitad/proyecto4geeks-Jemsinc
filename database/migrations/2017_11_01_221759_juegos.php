<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Juegos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
       Schema::create('juegos', function (Blueprint $table){
            $table->increments('id');
            $table->string('nombre' , 250);
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->integer('consolas_id')->unsigned();
            $table->foreign('consolas_id')->references('id')->on('consolas');
            $table->string('descripcion', 250);
            $table->integer('precio');
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
        Schema::dropIfExists('juegos');
    }
}
