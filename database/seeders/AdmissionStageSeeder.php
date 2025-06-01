<?php

namespace Database\Seeders;

use App\Models\AdmissionStage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdmissionStageSeeder extends Seeder
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

        foreach ($stages as $stage) {
            AdmissionStage::create([
                'title' => $stage,
                'sequence' => array_search($stage, $stages) + 1,
            ]);
        }
    }
}
