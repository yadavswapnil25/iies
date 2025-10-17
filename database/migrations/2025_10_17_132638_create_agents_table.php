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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('agent_code')->unique();
            $table->integer('experience_years');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->enum('category', ['category-a', 'category-b', 'category-c', 'category-d', 'category-e']);
            $table->text('specialization')->nullable();
            $table->decimal('service_fee_percentage', 5, 2)->default(2.00);
            $table->decimal('daily_fee_min', 8, 2)->default(3500.00);
            $table->decimal('daily_fee_max', 8, 2)->default(10000.00);
            $table->string('sbi_account_number')->nullable();
            $table->boolean('is_active')->default(true);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
