<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone')->unique();
            $table->string('nationality')->nullable();
            $table->longText('address')->nullable();
            $table->longText('current_address')->nullable();
            $table->longText('permanent_address')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('passport_no')->nullable();
            $table->longText('emergency_contact')->nullable();
            $table->longText('guardian_details')->nullable();
            $table->longText('education_background')->nullable();
            $table->longText('academic_details')->nullable();
            $table->longText('offer_letter_details')->nullable();
            $table->longText('additional_requirements')->nullable();
            $table->string('val_status')->nullable();
            $table->string('emgs_status')->nullable();
            $table->decimal('commission_amount', 15, 2)->nullable();
            $table->boolean('is_offer_given_to_student')->default(0)->nullable();
            $table->longText('offer_details')->nullable();
            $table->string('visa_status')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('current_status')->nullable();
            $table->boolean('scholarship_status')->default(0)->nullable();
            $table->string('enrollement_status')->nullable();
            $table->boolean('is_commission_claimed_from_univeristy')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
