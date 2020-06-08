<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorMovies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_movie', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('actor_id')->unsigned()->index();
            $table->foreign('actor_id')
                ->references('id')->on('actors')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->bigInteger('movie_id')->unsigned()->index();
            $table->foreign('movie_id')
                ->references('id')->on('movies')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_movies');
    }
}
