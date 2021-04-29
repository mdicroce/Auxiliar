<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreMovie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_movie', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->foreignId('genre_id')->references('id')->on('genres')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('movie_id')->references('id')->on('movies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('genre_movie');
    }
}
