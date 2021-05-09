<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->date('created_at');
            $table->date('updated_at');
            $table->boolean('approved')->default(false);

            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('articles_id');

            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('articles_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
