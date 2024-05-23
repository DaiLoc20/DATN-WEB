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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('AcountID')->nullable();
            $table->unsignedBigInteger('ProductID')->nullable();
            $table->text('content');
            $table->date('date');
            $table->string('starnumber');
            $table->timestamps();

            $table->foreign('AcountID')->references('id')->on('acounts')->onDelete('cascade');
            $table->foreign('ProductID')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
