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
            $table->increments('id')->primary();
            $table->integer('category_id')->nullable();
            $table->string('product_name');
            $table->integer('price');
            $table->text('short_description');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('slug');
            $table->enum('status',['outStock','inStock'])->default('inStock');
            $table->boolean('featured')->default(false);
            $table->string('images')->nullable();
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
        Schema::dropIfExists('products');
    }
}
