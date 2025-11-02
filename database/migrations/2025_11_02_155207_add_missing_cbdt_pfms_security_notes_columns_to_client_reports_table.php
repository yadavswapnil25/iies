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
            // Check and add status fields if they don't exist
            if (!Schema::hasColumn('client_reports', 'cbdt_approval_status')) {
                $table->string('cbdt_approval_status')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'pfms_approval_status')) {
                $table->string('pfms_approval_status')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'security_fee_deposit')) {
                $table->string('security_fee_deposit')->nullable();
            }

            // Check and add notes fields if they don't exist
            if (!Schema::hasColumn('client_reports', 'cbdt_approval_notes')) {
                $table->text('cbdt_approval_notes')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'pfms_approval_notes')) {
                $table->text('pfms_approval_notes')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'security_fee_deposit_notes')) {
                $table->text('security_fee_deposit_notes')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_reports', function (Blueprint $table) {
            if (Schema::hasColumn('client_reports', 'cbdt_approval_status')) {
                $table->dropColumn('cbdt_approval_status');
            }
            if (Schema::hasColumn('client_reports', 'pfms_approval_status')) {
                $table->dropColumn('pfms_approval_status');
            }
            if (Schema::hasColumn('client_reports', 'security_fee_deposit')) {
                $table->dropColumn('security_fee_deposit');
            }
            if (Schema::hasColumn('client_reports', 'cbdt_approval_notes')) {
                $table->dropColumn('cbdt_approval_notes');
            }
            if (Schema::hasColumn('client_reports', 'pfms_approval_notes')) {
                $table->dropColumn('pfms_approval_notes');
            }
            if (Schema::hasColumn('client_reports', 'security_fee_deposit_notes')) {
                $table->dropColumn('security_fee_deposit_notes');
            }
        });
    }
};
