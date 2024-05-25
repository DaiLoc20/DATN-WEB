<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('OrderID')->nullable();
            $table->unsignedBigInteger('ProductDetailID')->nullable();
            $table->integer('quantity');
            $table->bigInteger('price');
            $table->timestamps();

            $table->foreign('OrderID')->references('id')->on('order');
            $table->foreign('ProductDetailID')->references('id')->on('product_detaills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
