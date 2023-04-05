<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('reference');
            $table->double('price');
            $table->text('description')->nullable();
            $table->string('season');
        });

        Schema::create('basket_types_product_types', function(Blueprint $table) {
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('basket_type_id');
            $table->foreign('product_type_id')->references('id')->on('product_types');
            $table->foreign('basket_type_id')->references('id')->on('basket_types');
            $table->double('quantity')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket_types');
    }
}
