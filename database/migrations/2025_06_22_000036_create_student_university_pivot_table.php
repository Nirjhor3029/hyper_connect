<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentUniversityPivotTable extends Migration
{
    public function up()
    {
        Schema::create('student_university', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id', 'student_id_fk_10585124')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('university_id');
            $table->foreign('university_id', 'university_id_fk_10585124')->references('id')->on('universities')->onDelete('cascade');
        });
    }
}
