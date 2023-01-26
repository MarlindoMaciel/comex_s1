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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome',100);
            $table->text('descricao')->nullable();
            $table->decimal('preco', 12,2)->nullable();
            $table->integer('quantidade')->nullable();
            $table->string('unidade',100)->nullable();
            $table->foreignId('fk_categoria')->nullable();           
//            $table->foreignId('fk_categoria')->contrained('categorias');
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
        Schema::dropIfExists('produtos');
    }
};
