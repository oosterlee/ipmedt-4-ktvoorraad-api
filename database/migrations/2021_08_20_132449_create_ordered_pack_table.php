<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderedPackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordered_pack', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignUuid('pack_id')->references('uuid')->on('pack');
            $table->integer("amount");
            $table->integer("approved")->default(0);
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
        Schema::table('ordered_pack', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['pack_id']);
        });
        Schema::dropIfExists('ordered_pack');
    }
}
