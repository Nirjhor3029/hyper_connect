<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code')->nullable();
            $table->string('university_type')->nullable();
            $table->longText('address');
            $table->longText('university_details')->nullable();
            $table->string('accreditation')->nullable();
            $table->string('website');
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('logo_url')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
