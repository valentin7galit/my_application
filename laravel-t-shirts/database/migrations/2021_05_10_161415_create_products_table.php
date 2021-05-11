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
            $table->string('name', 15);
            $table->string('short_description', 50);
            $table->string('currency', 5);
            $table->float('price');
            $table->string('description');
            $table->smallInteger('rating');
            $table->date('published_at');
            $table->string('code', 10);
            $table->text('features');

            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('colour_id');
            $table->unsignedBigInteger('image_id');

            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
            $table->foreign('colour_id')->references('id')->on('colours')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('product_images')->onDelete('cascade');
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
