<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitorlogs', function (Blueprint $table) {
            $table->id();
             $table->string('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('iso_code')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('state_name')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country_flag')->nullable();
            $table->string('language')->nullable();
            $table->string('language_local')->nullable();
            $table->string('calling_code')->nullable();
            $table->string('region')->nullable();
            $table->string('sub_region')->nullable();
            $table->string('world_region')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('timezone')->nullable();
            $table->string('continent')->nullable();
            $table->string('currency')->nullable();
            $table->boolean('default')->nullable();
            $table->string('device')->nullable();
            $table->string('platform')->nullable();
            $table->string('platformversion')->nullable();
            $table->string('browser')->nullable();
            $table->string('browserversion')->nullable();
            $table->boolean('is_robot')->nullable();
            $table->string('robot_name')->nullable();
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
        Schema::dropIfExists('visitorlogs');
    }
}
