<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrllogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urllogs', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->timestamps();
        });
         Schema::create('visitorlog_urllog', function (Blueprint $table) {
            $table->integer('visitorlog_id');
            $table->integer('urllog_id');
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
        Schema::dropIfExists('urllogs');
    }
}
