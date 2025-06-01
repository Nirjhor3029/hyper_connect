<?php

namespace Database\Seeders;

use App\Models\AdmissionStage;
use App\Models\AdmissionStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdmissionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stages = [
            'lead_generation',
            'documentation',
            'offer_processing',
            'emgs_process',
            'visa_process',
            'arrival',
            'completed',
            'closed',
        ];

        $statuses = [
            'lead_generation' => [
                'prospective',
                'interested',
                'not_interested',
            ],
            'documentation' => [
                'documents_submitted',
                'shortlisted_university',
            ],
            'offer_processing' => [
                'offer_applied',
                'offer_received',
                'offer_rejected',
                'offer_withdrawn',
            ],
            'emgs_process' => [
                'emgs_submitted',
                'emgs_pending',
                'emgs_approved',
                'emgs_rejected',
            ],
            'visa_process' => [
                'visa_applied',
                'visa_approved',
                'visa_rejected',
            ],
            'arrival' => [
                'pre_departure_ready',
                'arrived_in_malaysia',
                'registration_complete',
            ],
            'completed' => [
                'completed',
                'withdrawn',
                'archived',
                'duplicate_entry',
            ],
            'closed' => [
                'closed',
                'reopened',
            ],
        ];

        foreach ($stages as $stage) {
            if (isset($statuses[$stage])) {
                foreach ($statuses[$stage] as $status) {
                    $admissionStage = AdmissionStage::where('title', $stage)->first();
                    if (!$admissionStage) {
                        continue; // Skip if the stage does not exist
                    }
                    $admissionStageId = $admissionStage->id;

                    AdmissionStatus::create([
                        'title' => $status,
                        'admission_stage_id' => $admissionStageId,
                        'sequence' => array_search($status, $statuses[$stage]) + 1,
                    ]);
                }
            }
        }
        // Additional statuses that are not tied to a specific stage
    }
}
