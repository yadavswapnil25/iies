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
            if (!Schema::hasColumn('client_reports', 'sender_address')) {
                $table->text('sender_address')->nullable()->after('sender_name');
            }
            if (!Schema::hasColumn('client_reports', 'remitting_bank_name')) {
                $table->text('remitting_bank_name')->nullable()->after('sender_address');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_reports', function (Blueprint $table) {
            if (Schema::hasColumn('client_reports', 'sender_address')) {
                $table->dropColumn('sender_address');
            }
            if (Schema::hasColumn('client_reports', 'remitting_bank_name')) {
                $table->dropColumn('remitting_bank_name');
            }
        });
    }
};
