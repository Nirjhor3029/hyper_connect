<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCoursesTable extends Migration
{
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id', 'university_fk_10627582')->references('id')->on('universities');
            $table->unsignedBigInteger('program_id')->nullable();
            $table->foreign('program_id', 'program_fk_10627583')->references('id')->on('programs');
        });
    }
}
