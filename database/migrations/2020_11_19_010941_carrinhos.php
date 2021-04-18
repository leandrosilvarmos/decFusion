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
