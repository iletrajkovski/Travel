<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewForPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_for_places', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('place_id');
            $table->unsignedBigInteger('user_id');
            $table->text('body');
            $table->timestamps();

            $table->foreign('place_id')
                ->references('id')
                ->on('places')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('review_for_places');
    }
}
