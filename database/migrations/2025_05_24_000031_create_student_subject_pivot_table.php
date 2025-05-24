<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjectPivotTable extends Migration
{
    public function up()
    {
        Schema::create('student_subject', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id', 'student_id_fk_10585125')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id', 'subject_id_fk_10585125')->references('id')->on('subjects')->onDelete('cascade');
        });
    }
}
