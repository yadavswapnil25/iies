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
        Schema::create('enquiry_forms', function (Blueprint $table) {
            $table->id();
            
            // Personal Information
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->text('address')->nullable();
            $table->string('organization')->nullable();
            $table->string('designation')->nullable();
            
            // Enquiry Details
            $table->enum('enquiry_type', [
                'noc', 'agent', 'procedure', 'fee', 'technical', 
                'general', 'complaint', 'other'
            ]);
            $table->string('enquiry_subject');
            $table->text('enquiry_description');
            $table->enum('priority', ['normal', 'high', 'urgent'])->default('normal');
            $table->string('reference_number')->nullable();
            
            // Supporting Documents
            $table->json('documents')->nullable(); // Store file paths as JSON
            
            // Communication Preferences
            $table->boolean('email_updates')->default(true);
            $table->boolean('sms_updates')->default(false);
            
            // Status and Admin Management
            $table->enum('status', ['new', 'in_progress', 'resolved', 'closed'])->default('new');
            $table->text('admin_notes')->nullable();
            $table->timestamp('resolved_at')->nullable();
            $table->string('reference_id')->unique(); // Auto-generated reference ID
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiry_forms');
    }
};
