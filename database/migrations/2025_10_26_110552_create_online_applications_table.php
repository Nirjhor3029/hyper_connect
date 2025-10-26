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
        Schema::create('online_applications', function (Blueprint $table) {
            $table->id();

            $table->string('applicantType')->nullable();
            $table->string('email')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('passportNumber')->nullable();
            $table->string('studentIdNumber')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital')->nullable();
            $table->string('religion')->nullable();
            $table->date('date_of_birth')->nullable();

            $table->string('phone')->nullable();
            $table->string('father_phone')->nullable();

            $table->string('address')->nullable();
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('postal_code')->nullable();

            $table->string('highest_qualification')->nullable();
            $table->date('graduation_date')->nullable();
            $table->string('awarding_institution')->nullable();
            $table->string('work_experience')->nullable();

            $table->unsignedBigInteger('campus')->nullable();
            $table->string('intake')->nullable();
            $table->string('study_type')->nullable();
            $table->json('sponsorships')->nullable();
            $table->string('external_scholarships')->nullable();

            // Files
            $table->string('photo')->nullable();
            $table->string('passport_copy')->nullable();
            $table->string('english_transcript')->nullable();
            $table->json('academic_results')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_applications');
    }
};
