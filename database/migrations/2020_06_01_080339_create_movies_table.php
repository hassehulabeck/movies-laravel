<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)->unique();
            $table->year('year');
            $table->bigInteger('director_id')->nullable()->unsigned()->index();
            $table->timestamps();
        });
        Schema::table('movies', function (Blueprint $table) {
            $table->foreign('director_id')
                ->references('id')->on('directors');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
