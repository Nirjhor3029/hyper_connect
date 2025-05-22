<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject_name')->nullable();
            $table->string('subject_details')->nullable();
            $table->string('duration')->nullable();
            $table->decimal('course_fee', 15, 2)->nullable();
            $table->decimal('required_fee', 15, 2)->nullable();
            $table->decimal('other_fees', 15, 2)->nullable();
            $table->longText('eligibility_criterias')->nullable();
            $table->boolean('english_requirements')->default(0)->nullable();
            $table->boolean('waiver_program')->default(0)->nullable();
            $table->decimal('waiver_amount', 15, 2)->nullable();
            $table->longText('waiver_criterias')->nullable();
            $table->longText('subject_prerequisits')->nullable();
            $table->decimal('commission', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
