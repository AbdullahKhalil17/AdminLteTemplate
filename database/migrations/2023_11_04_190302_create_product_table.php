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
        Schema::create('product', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('unit_id');
            $table->foreign('unit_id')->references('id')->on('unit')->onDelete('cascade');
            $table->string('productName', 255);
            $table->string('productDescription', 255);
            $table->string('productCategory', 255); // Futtre chage to id_Category
            $table->decimal('productPrice', 10, 2);
            $table->integer('stockQuantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
