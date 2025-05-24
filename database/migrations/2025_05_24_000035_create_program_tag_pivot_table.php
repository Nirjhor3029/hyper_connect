<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('program_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id', 'program_id_fk_10576508')->references('id')->on('programs')->onDelete('cascade');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id', 'tag_id_fk_10576508')->references('id')->on('tags')->onDelete('cascade');
        });
    }
}
