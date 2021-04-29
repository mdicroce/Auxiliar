<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('dni',20)->unique();
            $table->string('name',50);
            $table->string('surname',100);
            /* $table->foreignId('id_city')->nullable()->references('id')->on('cities')->onUpdate('cascade')->onDelte('set null'); */
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
        Schema::dropIfExists('people');
    }
}
