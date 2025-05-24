<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('commission_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comission_commited')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
