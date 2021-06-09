<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id("id")->unique();
            $table->string("productname");
            $table->string("category");
            $table->string("description")->nullable();
            $table->string("sub")->nullable();
            $table->string("brand");
            $table->string("model");
            $table->integer("price");
            $table->boolean("approval")->nullable();
            $table->integer("maximum");
            $table->string("condition");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
