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
            $table->string('contact_number')->nullable()->after('date_of_birth');
            $table->string('email_id')->nullable()->after('contact_number');
            $table->text('permanent_address')->nullable()->after('email_id');
            $table->string('pan_number')->nullable()->after('permanent_address');
            $table->string('aadhar_number')->nullable()->after('pan_number');
            $table->string('passport_number')->nullable()->after('aadhar_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('client_reports', function (Blueprint $table) {
            $table->dropColumn([
                'contact_number',
                'email_id', 
                'permanent_address',
                'pan_number',
                'aadhar_number',
                'passport_number'
            ]);
        });
    }
};
