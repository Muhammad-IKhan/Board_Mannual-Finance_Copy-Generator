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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name');
            $table->string('f_name');
            $table->integer('r-number');
            $table->string('class');
            $table->string('session');
            $table->integer('year');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
