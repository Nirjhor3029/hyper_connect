<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('subject_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id', 'subject_id_fk_10581691')->references('id')->on('subjects')->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_10581691')->references('id')->on('tags')->onDelete('cascade');
        });
    }
}
