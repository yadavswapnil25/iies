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
        Schema::table('client_reports', function (Blueprint $table) {
            // Add notes fields for progress tracker
            $table->text('kyc_compliance_notes')->nullable()->after('kyc_compliance_status');
            $table->text('bank_verification_notes')->nullable()->after('bank_verification_status');
            $table->text('departmental_approval_notes')->nullable()->after('departmental_approval_status');
            $table->text('noc_draft_notes')->nullable()->after('noc_draft_status');
            $table->text('noc_issuance_notes')->nullable()->after('noc_issuance_status');
            $table->text('information_grant_notes')->nullable()->after('information_grant_status');
            $table->text('followup_closure_notes')->nullable()->after('followup_closure_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_reports', function (Blueprint $table) {
            $table->dropColumn([
                'kyc_compliance_notes',
                'bank_verification_notes',
                'departmental_approval_notes',
                'noc_draft_notes',
                'noc_issuance_notes',
                'information_grant_notes',
                'followup_closure_notes'
            ]);
        });
    }
};
