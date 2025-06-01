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
        Schema::table('students', function (Blueprint $table) {
            $table->enum('admission_stage', [
                'lead_generation',
                'documentation',
                'offer_processing',
                'emgs_process',
                'visa_process',
                'arrival',
                'completed',
                'closed'
            ])->nullable();

            $table->enum('admission_status', [
                'prospective',
                'interested',
                'not_interested',
                'documents_submitted',
                'shortlisted_university',
                'offer_applied',
                'offer_received',
                'offer_rejected',
                'offer_withdrawn',
                'emgs_submitted',
                'emgs_pending',
                'emgs_approved',
                'emgs_rejected',
                'visa_applied',
                'visa_approved',
                'visa_rejected',
                'pre_departure_ready',
                'arrived_in_malaysia',
                'registration_complete',
                'completed',
                'withdrawn',
                'archived',
                'duplicate_entry'
            ])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('admission_stage');
            $table->dropColumn('admission_status');
        });
    }
};
