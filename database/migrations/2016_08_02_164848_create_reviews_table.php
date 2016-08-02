<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->tinyInteger('police_rating');
            $table->tinyInteger('corners_rating');
            $table->tinyInteger('straights_rating');
            $table->tinyInteger('scenery_rating');
            $table->tinyInteger('road_quality_rating');
            $table->tinyInteger('visibility_rating');
            $table->tinyInteger('hazards');
            $table->bigInteger('route_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('route_id')->references('id')->on('routes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reviews');
    }
}
