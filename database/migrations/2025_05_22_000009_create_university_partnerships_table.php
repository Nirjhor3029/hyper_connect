<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityPartnershipsTable extends Migration
{
    public function up()
    {
        Schema::create('university_partnerships', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('partner_name')->nullable();
            $table->string('partner_type')->nullable();
            $table->string('agreement_url')->nullable();
            $table->date('active_from')->nullable();
            $table->date('active_to')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
