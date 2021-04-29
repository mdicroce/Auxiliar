<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->id()->unsigned();
            /* $table->foreignId('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_credit_card')->references('id')->on('creditcards')->onDelete('cascade')->onUpdate('cascade'); */
            $table->integer('cuantity');
            $table->float('total');
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
        Schema::dropIfExists('buys');
    }
}
