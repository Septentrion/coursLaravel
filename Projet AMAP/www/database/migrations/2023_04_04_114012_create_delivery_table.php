<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('address');
            $table->string('city');
            $table->dateTime('startTime');
            $table->datetime('endTime');
        });

        Schema::create('deliveries_producers', function(Blueprint $table) {
            $table->unsignedBigInteger('producer_id');
            $table->unsignedBigInteger('delivery_id');
            $table->foreign('producer_id')->references('id')->on('producers');
            $table->foreign('delivery_id')->references('id')->on('deliveries');
//            $table->double('quantity');
        });

        Schema::create('baskets_delliveries', function(Blueprint $table) {
            $table->unsignedBigInteger('basket_id');
            $table->unsignedBigInteger('delivery_id');
            $table->foreign('basket_id')->references('id')->on('baskets');
            $table->foreign('delivery_id')->references('id')->on('deliveries');
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
        Schema::dropIfExists('delivery');
    }
}
