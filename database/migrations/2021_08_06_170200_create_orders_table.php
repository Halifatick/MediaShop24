<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->bigInteger('status_id')->unsigned();
            $table->foreign('status_id')
                ->references('id')->on('order_statuses');
            $table->bigInteger('delivery_id')->unsigned();
            $table->foreign('delivery_id')
                ->references('id')->on('delivery_methods');
            $table->bigInteger('payment_id')->unsigned();
            $table->foreign('payment_id')
                ->references('id')->on('payment_methods');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->integer('price');
            $table->integer('quantity');
            $table->dateTime('delivery_datetime');
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
        Schema::dropIfExists('orders');
    }
}
