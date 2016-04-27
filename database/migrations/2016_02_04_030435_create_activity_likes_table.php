<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_likes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->index()->unsigned();
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->integer('user_id')->index()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
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
        Schema::drop('activity_likes');
    }
}
