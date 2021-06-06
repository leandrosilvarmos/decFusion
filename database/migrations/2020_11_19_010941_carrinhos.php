<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carrinhos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('carrinhos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->default(0);
            $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade')->default(0);   
            $table->timestamps();
             });
          
    }

    // $table->unsignedBigInteger('cliente_id');
    // $table->unsignedBigInteger('profissional_id');
    // $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->default(0);
    // $table->foreign('profissional_id')->references('id')->on('profissionals')->onDelete('cascade')->default(0);

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrinhos');
        
    }

  
}
