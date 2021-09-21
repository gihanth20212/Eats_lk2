<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            // Restaurant Id
            $table->id();
            // Restaurant Owner Id
            $table->integer('user_id');
            // Restaurant Name
            $table->string('rest_name');
            // Restaurant Cetegory
            $table->string('rest_category');
            // Restaurant Address
            $table->string('rest_address');
            // Restaurant City
            $table->string('rest_city');
            // Restaurant Charge
            $table->string('rest_charge')->nullable();
            // Restaurant Description
            $table->text('rest_desc')->nullable();
            // Restaurant Website
            $table->string('rest_web')->nullable();
            // Restaurant Logo
            $table->string('rest_logo')->nullable();
            // Restaurant Cover
            $table->string('rest_cover')->nullable();
            // Restaurant ReviewScore
            $table->integer('review_avg')->nullable();
            // Created and Updated Timestamps-2 fields
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
        Schema::dropIfExists('restaurants');
    }
}
