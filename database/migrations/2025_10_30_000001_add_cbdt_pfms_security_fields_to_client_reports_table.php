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
            // Status fields
            $table->string('cbdt_approval_status')->nullable();
            $table->string('pfms_approval_status')->nullable();
            $table->string('security_fee_deposit')->nullable();

            // Notes fields
            $table->text('cbdt_approval_notes')->nullable();
            $table->text('pfms_approval_notes')->nullable();
            $table->text('security_fee_deposit_notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_reports', function (Blueprint $table) {
            $table->dropColumn([
                'cbdt_approval_status',
                'pfms_approval_status',
                'security_fee_deposit',
                'cbdt_approval_notes',
                'pfms_approval_notes',
                'security_fee_deposit_notes'
            ]);
        });
    }
};


