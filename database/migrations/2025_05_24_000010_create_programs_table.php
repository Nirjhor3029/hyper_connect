<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('short_code')->nullable();
            $table->string('field_of_study')->nullable();
            $table->string('education_type')->nullable();
            $table->string('level')->nullable();
            $table->string('duration_months')->nullable();
            $table->integer('credit_hours')->nullable();
            $table->decimal('fees', 15, 2)->nullable();
            $table->longText('fee_breakdown')->nullable();
            $table->string('teaching_language')->nullable();
            $table->longText('semester_intake_months')->nullable();
            $table->longText('requirements')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
