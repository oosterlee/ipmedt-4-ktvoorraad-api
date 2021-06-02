<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWinnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winners', function (Blueprint $table) {
            $table->id();
            $table->string("country");
            $table->string("artist");
            $table->string("song");
            $table->string("video");
            $table->foreign("video")->references("src")->on("video");
            $table->integer("year")->unique();
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
        Schema::table("winners", function($table){
            $table->dropForeign("winners_video_foreign");
        });
        Schema::dropIfExists('winners');
    }
}
