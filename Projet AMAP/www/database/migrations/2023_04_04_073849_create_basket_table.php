<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baskets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('reference');
            $table->unsignedBigInteger('basket_type_id');
            $table->foreign('basket_type_id')->references('id')->on('basket_types');
        });

        Schema::create('baskets_products', function(Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('basket_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('basket_id')->references('id')->on('baskets');
        });

        Schema::create('baskets_clients', function(Blueprint $table) {
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('basket_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('basket_id')->references('id')->on('baskets');
//            $table->double('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket');
    }
}
