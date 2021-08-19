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
            $table->id();
            $table->unsignedBigInteger('sub_category_id');
            $table->string('product_name');
            $table->integer('product_price');
            $table->integer('product_old_price');
            $table->integer('product_quantity');
            $table->integer('status')->nullable();
            $table->string('size');
            $table->string('color');
            $table->string('slug')->unique();
            $table->string('product_type')->nullable();
            $table->string('product_thumbnail')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('full_description')->nullable();
            $table->unsignedBigInteger('brand_id');
            $table->softDeletes();
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
