<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectionRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projection_room', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('id_projection')->nullable()->references('id')->on('projections')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_room')->nullable()->references('id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('projection_room');
    }
}
