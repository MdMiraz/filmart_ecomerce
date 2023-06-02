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
            $table->bigIncrements('id');            
            $table->integer('brand_id');
            $table->integer('category_id');            
            $table->integer('sub_category_id');
            $table->integer('sub_sub_category_id');
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_short_description');
            $table->string('product_long_description');
            $table->string('product_price');
            $table->string('product_size');
            $table->string('product_color');
            $table->string('stock_quantity');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
            $table->SoftDeletes();
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
