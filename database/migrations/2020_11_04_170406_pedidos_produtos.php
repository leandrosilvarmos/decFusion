<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PedidosProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //       
         Schema::create('pedidos_produtos', function (Blueprint $table) {
        $table->id();
        $table->foreignId('pedidos_id');
        $table->foreignId('produtos_id');
        $table->decimal('valor_total', 8, 2);
        $table->integer('quantidade');
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
        //
    }
}
