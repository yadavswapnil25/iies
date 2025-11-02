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
            // Payment Book fields - use TEXT for status to save space
            if (!Schema::hasColumn('client_reports', 'payment_book_notes')) {
                $table->text('payment_book_notes')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'payment_book_status_approval')) {
                $table->text('payment_book_status_approval')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'payment_book_status_approval_notes')) {
                $table->text('payment_book_status_approval_notes')->nullable();
            }

            // NFRA fields
            if (!Schema::hasColumn('client_reports', 'nfra_application_notes')) {
                $table->text('nfra_application_notes')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'nfra_approval_notes')) {
                $table->text('nfra_approval_notes')->nullable();
            }

            // Form 28 fields - use TEXT for status to save space
            if (!Schema::hasColumn('client_reports', 'form_28_application_processing')) {
                $table->text('form_28_application_processing')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'form_28_application_processing_notes')) {
                $table->text('form_28_application_processing_notes')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'form_28_approval')) {
                $table->text('form_28_approval')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'form_28_approval_notes')) {
                $table->text('form_28_approval_notes')->nullable();
            }

            // Form 28B fields - use TEXT for status to save space
            if (!Schema::hasColumn('client_reports', 'form_28b_application_processing')) {
                $table->text('form_28b_application_processing')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'form_28b_application_processing_notes')) {
                $table->text('form_28b_application_processing_notes')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'form_28b_approval')) {
                $table->text('form_28b_approval')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'form_28b_approval_notes')) {
                $table->text('form_28b_approval_notes')->nullable();
            }

            // NOC Fee fields - use TEXT for status to save space
            if (!Schema::hasColumn('client_reports', 'noc_fee')) {
                $table->text('noc_fee')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'noc_fee_notes')) {
                $table->text('noc_fee_notes')->nullable();
            }

            // FEMA Application fields - use TEXT for status to save space
            if (!Schema::hasColumn('client_reports', 'fema_application_status')) {
                $table->text('fema_application_status')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'fema_application_notes')) {
                $table->text('fema_application_notes')->nullable();
            }

            // Preliminary Check fields - use TEXT for status to save space
            if (!Schema::hasColumn('client_reports', 'preliminary_check_status')) {
                $table->text('preliminary_check_status')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'preliminary_check_status_notes')) {
                $table->text('preliminary_check_status_notes')->nullable();
            }

            // Sender fields - use TEXT to save space
            if (!Schema::hasColumn('client_reports', 'sender_email')) {
                $table->text('sender_email')->nullable();
            }
            if (!Schema::hasColumn('client_reports', 'sender_contact')) {
                $table->text('sender_contact')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_reports', function (Blueprint $table) {
            $columns = [
                'payment_book_notes',
                'payment_book_status_approval',
                'payment_book_status_approval_notes',
                'nfra_application_notes',
                'nfra_approval_notes',
                'form_28_application_processing',
                'form_28_application_processing_notes',
                'form_28_approval',
                'form_28_approval_notes',
                'form_28b_application_processing',
                'form_28b_application_processing_notes',
                'form_28b_approval',
                'form_28b_approval_notes',
                'noc_fee',
                'noc_fee_notes',
                'fema_application_status',
                'fema_application_notes',
                'preliminary_check_status',
                'preliminary_check_status_notes',
                'sender_email',
                'sender_contact',
            ];

            foreach ($columns as $column) {
                if (Schema::hasColumn('client_reports', $column)) {
                    $table->dropColumn($column);
                }
            }
        });
    }
};
