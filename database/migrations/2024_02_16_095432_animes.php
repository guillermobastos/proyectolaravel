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
         //HECHO
         Schema::create('animes',function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->bigInteger('categoria_id')->unsigned();
            $table->string('nombreAnime');
            $table->integer('duracion');
            $table->string('descripcion');
            $table->double('valoracion');
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          //HECHO
          Schema::dropIfExists('animes');
    }
};
