<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email');
            $table->string('subject')->nullable();
            $table->longText('message');
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
