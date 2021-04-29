<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->foreignId('id_city')->nullable()->references('id')->on('cities')->onUpdate('cascade')->onDelte('set null');
        });
        Schema::table('buys', function (Blueprint $table) {

            $table->foreignId('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_credit_card')->references('id')->on('creditcards')->onDelete('cascade')->onUpdate('cascade');
        });
        Schema::table('creditcards', function (Blueprint $table) {
            $table->foreignId('id_creditcounts')->references('id')->on('creditcounts');
        });
        Schema::table('role_user', function (Blueprint $table) {

            $table->foreignId('id_role')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('cities', function (Blueprint $table) {
            $table->foreignId('id_province')->references('id')->on('provinces')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('buy_ticket', function (Blueprint $table) {
            //
        });
    }
}