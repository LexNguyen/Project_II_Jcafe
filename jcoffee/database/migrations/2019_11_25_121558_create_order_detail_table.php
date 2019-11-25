<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_o');
            $table->foreign('id_o')->references('id')->on('order');
            $table->unsignedBigInteger('id_p');
            $table->foreign('id_p')->references('id')->on('products');
            $table->integer('number');
            $table->integer('table_number');
            $table->integer('price_detail')->nullable();
            $table->string('customer_request');
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
        Schema::dropIfExists('order_detail');
    }
}
