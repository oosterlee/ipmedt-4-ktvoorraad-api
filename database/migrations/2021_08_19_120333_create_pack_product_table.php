<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('pack_product', function (Blueprint $table) {
            $table->id();
            // $table->uuid('pack_id');
            // $table->uuid('product_id');
            // $table->foreign('pack_id')->references('id')->on('pack')->onDelete('cascade');
            $table->foreignUuid('pack_id')->references('uuid')->on('pack')->onDelete('cascade');
            // $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            // $table->foreignId('pack_id')->constrained('pack')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('pack_product', function (Blueprint $table) {
            $table->dropForeign(['pack_id']);
            $table->dropForeign(['product_id']);
        });
        Schema::dropIfExists('pack_product');
    }
}
