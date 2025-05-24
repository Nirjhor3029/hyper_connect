<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSubjectsTable extends Migration
{
    public function up()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id', 'university_fk_10581676')->references('id')->on('universities');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id', 'course_fk_10581677')->references('id')->on('courses');
        });
    }
}
