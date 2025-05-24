<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCommissionFromUniversitiesTable extends Migration
{
    public function up()
    {
        Schema::table('commission_from_universities', function (Blueprint $table) {
            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id', 'university_fk_10581660')->references('id')->on('universities');
            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id', 'course_fk_10581661')->references('id')->on('courses');
        });
    }
}
