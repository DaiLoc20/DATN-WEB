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
        Schema::create('fillters', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->unsignedBigInteger('ProductID')->nullable();
            $table->unsignedBigInteger('ProductDetaillsID')->nullable();
            $table->timestamps();

            $table->foreign('ProductID')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('ProductDetaillsID')->references('id')->on('product_detaills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fillters');
    }
};
