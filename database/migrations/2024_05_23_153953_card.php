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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('AcountID')->nullable();
            $table->unsignedBigInteger('ProductDetaillsID')->nullable();
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('AcountID')->references('id')->on('acounts')->onDelete('cascade');
            $table->foreign('ProductDetaillsID')->references('id')->on('product_detaills')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
