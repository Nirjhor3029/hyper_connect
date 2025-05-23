<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionFromUniversitiesTable extends Migration
{
    public function up()
    {
        Schema::create('commission_from_universities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('comission', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
