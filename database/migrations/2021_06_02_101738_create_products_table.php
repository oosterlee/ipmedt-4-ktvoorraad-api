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
            $table->id("id");
            $table->string("productname");
            $table->string("category");
            $table->longtext("description");
            $table->string("sub")->nullable();
            $table->string("brand");
            $table->string("model");
            $table->decimal("price", 10, 2);
            $table->boolean("approval");
            $table->integer("maxorders");
            $table->string("condition");
            $table->string("image");
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
