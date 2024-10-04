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
        Schema::create('receipts', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('heads_id'); 
            $table->string('receipt_number')->unique(); // Unique receipt number
            $table->string('docOrPapers_count'); // Example column for a description
            $table->integer('t_amount')->nullable();; // Amount for the receipt
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * 
     * 
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');

    }
};
