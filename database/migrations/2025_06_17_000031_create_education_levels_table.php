<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationLevelsTable extends Migration
{
    public function up()
    {
        Schema::create('education_levels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('short_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
