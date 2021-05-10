<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot_sizes', function (Blueprint $table) {
            $table->id();
            $table->integer('total_stock');

            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('product_id');

            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lot_sizes');
    }
}
