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
        Schema::create('client_reports', function (Blueprint $table) {
            $table->id();
            
            // File Information
            $table->string('unique_id')->unique();
            $table->string('file_no')->nullable();
            $table->string('acknowledgement_no')->nullable();
            $table->string('prepared_by')->nullable();
            
            // Client Information
            $table->string('full_name');
            $table->string('father_husband_name')->nullable();
            $table->date('date_of_birth')->nullable();
            
            // Fund & NOC Details
            $table->string('fund_type')->nullable();
            $table->decimal('amount', 15, 2)->nullable();
            $table->string('currency', 10)->nullable();
            $table->text('purpose_of_funds')->nullable();
            $table->string('noc_type')->nullable();
            $table->string('noc_reference_no')->nullable();
            $table->string('noc_deed_no')->nullable();
            $table->text('conditions_on_noc')->nullable();
            
            // Beneficiary Bank & Payment Details
            $table->string('beneficiary_bank_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_email')->nullable();
            $table->string('account_type')->nullable();
            
            // Origin/Sender Details
            $table->string('origin_country')->nullable();
            $table->string('sender_name')->nullable();
            $table->string('sender_swift_code')->nullable();
            $table->string('transaction_reference')->nullable();
            
            // Work Information
            $table->string('type_of_work')->nullable();
            $table->string('hsn_code')->nullable();
            $table->string('broker_agent_name')->nullable();
            $table->string('banking_partner')->nullable();
            $table->decimal('total_amount', 15, 2)->nullable();
            
            // File Processing Status
            $table->string('payment_book_status')->default('pending')->nullable();
            $table->string('nfra_application_status')->default('pending')->nullable();
            $table->string('nfra_approval_status')->default('pending')->nullable();
            $table->string('kyc_compliance_status')->default('pending')->nullable();
            $table->string('bank_verification_status')->default('pending')->nullable();
            $table->string('departmental_approval_status')->default('pending')->nullable();
            $table->string('noc_draft_status')->default('pending')->nullable();
            $table->string('noc_issuance_status')->default('pending')->nullable();
            $table->string('information_grant_status')->default('pending')->nullable();
            $table->string('followup_closure_status')->default('pending')->nullable();
            
            // Approval & Signature
            $table->string('technical_team_approval')->nullable();
            $table->string('legal_compliance_approval')->nullable();
            $table->string('final_authoriser_approval')->nullable();
            
            // General Notes
            $table->text('general_notes')->nullable();
            $table->text('officer_remarks')->nullable();
            
            // Overall Status
            $table->enum('status', ['draft', 'in_progress', 'completed', 'on_hold', 'rejected'])->default('draft');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_reports');
    }
};
