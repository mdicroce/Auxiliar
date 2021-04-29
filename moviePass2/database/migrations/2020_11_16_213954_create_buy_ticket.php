<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_ticket', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('id_buy')->references('id')->on('buys')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_ticket')->references('id')->on('tickets')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('buy_ticket');
    }
}
