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
            $table->string('article');
            $table->string('title');
            $table->string('description');
            $table->json('properties');
            $table->integer('new_price');
            $table->integer('previous_price');
            $table->json('images');
            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id')
                ->references('id')->on('product_statuses');
            $table->bigInteger('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')
                ->references('id')->on('subcategories');
            $table->bigInteger('type_id')->unsigned()->nullable();
            $table->foreign('type_id')
                ->references('id')->on('product_types');
            $table->timestamps();
            $table->softDeletes();
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