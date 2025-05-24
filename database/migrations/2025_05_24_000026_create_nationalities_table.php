<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalitiesTable extends Migration
{
    public function up()
    {
        Schema::create('nationalities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('num_code')->nullable();
            $table->string('alpha_2_code')->nullable();
            $table->string('alpha_3_code')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality_en')->nullable();
            $table->string('nationality_bn')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
