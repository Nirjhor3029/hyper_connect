<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagUniversityPivotTable extends Migration
{
    public function up()
    {
        Schema::create('tag_university', function (Blueprint $table) {
            $table->unsignedBigInteger('university_id');
            $table->foreign('university_id', 'university_id_fk_10627686')->references('id')->on('universities')->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_10627686')->references('id')->on('tags')->onDelete('cascade');
        });
    }
}
