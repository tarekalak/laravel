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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->boolean('type');
            $table->foreignId('customerId')->constrained('customers')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('productId')->constrained('products')->onDelete('cascade')->onUpdate('cascade');
            $table->double('amount');
            $table->double('amountReceived');
            $table->double('amountDue');
            $table->double('remainder');
            $table->double('totalRemainder')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
