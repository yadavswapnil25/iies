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
            $table->string('application_type')->nullable()->after('passport_number');
            $table->date('submission_date')->nullable()->after('application_type');
            $table->string('reference_application_no')->nullable()->after('submission_date');
            $table->text('nature_of_work')->nullable()->after('reference_application_no');
            $table->string('verification_level')->nullable()->after('nature_of_work');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_reports', function (Blueprint $table) {
            $table->dropColumn([
                'application_type',
                'submission_date',
                'reference_application_no',
                'nature_of_work',
                'verification_level'
            ]);
        });
    }
};
