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
        Schema::create('finance_ministers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('hindi_name')->nullable();
            $table->string('designation'); // Finance Minister or Minister of State
            $table->string('hindi_designation')->nullable();
            $table->string('image_path')->nullable();
            $table->text('bio')->nullable();
            $table->text('hindi_bio')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_ministers');
    }
};
