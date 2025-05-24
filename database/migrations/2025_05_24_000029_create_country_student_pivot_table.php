<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryStudentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('country_student', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id', 'student_id_fk_10584039')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id', 'country_id_fk_10584039')->references('id')->on('countries')->onDelete('cascade');
        });
    }
}
