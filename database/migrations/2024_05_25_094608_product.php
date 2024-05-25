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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->bigInteger('price');
            $table->string('image',255);
            $table->unsignedBigInteger('CategoryID')->nullable();
            $table->unsignedBigInteger('BrandID')->nullable();
            $table->unsignedBigInteger('FillterID')->nullable();
            $table->timestamps();

            $table->foreign('CategoryID')->references('id')->on('categories');
            $table->foreign('BrandID')->references('id')->on('brands');
            $table->foreign('FillterID')->references('id')->on('fillters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
