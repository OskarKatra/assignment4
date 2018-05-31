<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('time');
            $table->integer('seat');
            $table->double('price', 8, 2);
            $table->unsignedInteger('cinema_id');
            $table->unsignedInteger('movie_id');
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamps();
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('cinema_id')
            ->references('id')
            ->on('cinemas')
            ->onDelete('cascade');

            $table->foreign('movie_id')
            ->references('id')
            ->on('movies')
            ->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('set null');
        });
    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
