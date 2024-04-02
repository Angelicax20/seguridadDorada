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
        Schema::create('simulators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('product_id')->comment('paso 1')->nullable();
            $table->unsignedBigInteger('address_id')->comment('paso 2')->nullable();
            $table->unsignedBigInteger('card_id')->comment('paso 3')->nullable();
            $table->enum('status', ['0', '1',])->default('0')->comment('0 = pendiente, 1 = completado');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->foreign('card_id')->references('id')->on('cards');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('simulators');
    }
};
