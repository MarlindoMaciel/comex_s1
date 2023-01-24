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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor_unitario', 12,2);
            $table->decimal('valor_conjunto', 12,2)->nullable();
            $table->decimal('valor_parcial', 12,2)->nullable();
            $table->decimal('valor_desconto', 12,2)->nullable();
            $table->decimal('valor_total', 12,2)->nullable();;
            $table->integer('quantidade')->default(1);
            $table->string('anotacao',255)->nullable();
            $table->foreignId('fk_produto')->contrained('produtos');
            $table->foreignId('fk_cliente')->contrained('clientes');
            $table->foreignId('fk_vendedor')->contrained('clientes');
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
        Schema::dropIfExists('vendas');
    }
};
