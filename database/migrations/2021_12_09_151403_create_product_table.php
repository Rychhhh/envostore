<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->integer('harga')->nullable();
            $table->string('description')->nullable();
            $table->string('stok')->nullable();
            $table->string('category')->nullable();
            $table->string('image');
            // $table->unsignedBigInteger('products_id');
            // $table->foreign('products_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('product');
    }
}
