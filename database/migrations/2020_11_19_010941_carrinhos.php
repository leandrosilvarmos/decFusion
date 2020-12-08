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
            $table->bigInteger('user_id')->references('id')->on('User')->default(0);
            $table->integer('produto_id')->references('id')->on('produtos')->default(0);
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
