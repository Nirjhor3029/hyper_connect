<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('course_mode');
            $table->string('name');
            $table->string('duration');
            $table->integer('total_fees');
            $table->integer('no_of_semester')->nullable();
            $table->longText('course_details')->nullable();
            $table->string('url')->nullable();
            $table->string('scholarship')->nullable();
            $table->integer('commission')->nullable();
            $table->string('english_requirement')->nullable();
            $table->longText('custom_message_for_student')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
