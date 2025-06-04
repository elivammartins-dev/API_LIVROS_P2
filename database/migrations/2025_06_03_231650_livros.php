<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('sinopse')->nullable();
            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('genero_id')->nullable();
            $table->timestamps();

            $table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');
            $table->foreign('genero_id')->references('id')->on('generos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('livros');
    }
};