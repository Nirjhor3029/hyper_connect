<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToApplicationsTable extends Migration
{
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id', 'student_fk_10576510')->references('id')->on('students');
            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id', 'university_fk_10576511')->references('id')->on('universities');
            $table->unsignedBigInteger('program_id')->nullable();
            $table->foreign('program_id', 'program_fk_10576512')->references('id')->on('programs');
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->foreign('agent_id', 'agent_fk_10576980')->references('id')->on('agents');
            $table->unsignedBigInteger('sub_agent_id')->nullable();
            $table->foreign('sub_agent_id', 'sub_agent_fk_10576981')->references('id')->on('agents');
        });
    }
}
