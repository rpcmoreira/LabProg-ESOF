<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('Nome');
            $table->string('Sobrenome');
            $table->string('Cargo');
            $table->decimal('AnosExperiencia');
            $table->string('Sexo');
            
            $table->boolean('Default');
            $table->string('Imagem');

            $table->string('Email')->unique();
            $table->timestamp('Email_verificado')->nullable();
            $table->string('Password');
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
        Schema::dropIfExists('candidatos');
    }
}
