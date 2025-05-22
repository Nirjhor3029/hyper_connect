<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('preferences')->nullable();
            $table->string('language')->nullable();
            $table->string('theme_mode')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
