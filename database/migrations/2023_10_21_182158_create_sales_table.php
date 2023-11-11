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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customerId')->constrained('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('productId')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
            $table->double('amount');
            $table->double('amountDue');
            $table->double('payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
