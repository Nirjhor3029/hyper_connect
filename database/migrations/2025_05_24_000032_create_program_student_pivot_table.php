<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramStudentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('program_student', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id', 'student_id_fk_10585126')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id', 'program_id_fk_10585126')->references('id')->on('programs')->onDelete('cascade');
        });
    }
}
