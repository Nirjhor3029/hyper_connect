<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisaApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('visa_applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('visa_type')->nullable();
            $table->string('current_stage')->nullable();
            $table->string('status')->nullable();
            $table->datetime('submitted_at')->nullable();
            $table->datetime('approved_at')->nullable();
            $table->datetime('issued_at')->nullable();
            $table->datetime('expires_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
