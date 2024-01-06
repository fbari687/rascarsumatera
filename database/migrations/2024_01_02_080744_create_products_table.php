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
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('seo');
            $table->text('description');
            $table->string('image');
            $table->boolean('additional_information')->default(1);
            $table->integer('view')->nullable()->default(0);
            $table->timestamps();

            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
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
