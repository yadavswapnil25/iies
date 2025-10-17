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
        Schema::create('hire_agent_requests', function (Blueprint $table) {
            $table->id();
            
            // Personal Information
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('organization')->nullable();
            
            // Agent Requirements
            $table->enum('agent_category', [
                'category-a', 'category-b', 'category-c', 'category-d', 'category-e'
            ]);
            $table->string('preferred_agent')->nullable();
            $table->text('service_description');
            
            // Additional Information
            $table->decimal('budget', 10, 2)->nullable();
            $table->enum('timeline', ['urgent', 'standard', 'flexible'])->nullable();
            
            // Status and Admin Management
            $table->enum('status', ['new', 'in_progress', 'assigned', 'completed', 'cancelled'])->default('new');
            $table->text('admin_notes')->nullable();
            $table->string('assigned_agent')->nullable();
            $table->timestamp('assigned_at')->nullable();
            $table->timestamp('completed_at')->nullable();
            $table->string('reference_id')->unique(); // Auto-generated reference ID
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hire_agent_requests');
    }
};
