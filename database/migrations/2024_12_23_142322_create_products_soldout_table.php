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
        Schema::create('products_soldout', function (Blueprint $table) {
            $table->id();
            $table->string('merek');
            $table->string('nama');
            $table->string('year');
            $table->string('price');
            $table->string('image_soldout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_soldout');
    }
};
