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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',255);
            $table->string('cpf',30);
            $table->string('telefone',100);
            $table->string('rua',255);
            $table->string('numero',30);
            $table->string('complemento',200);
            $table->string('bairro',200);
            $table->string('cidade',200);
            $table->string('estado',200);
            $table->string('foto',200);
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
        Schema::dropIfExists('clientes');
    }
};
