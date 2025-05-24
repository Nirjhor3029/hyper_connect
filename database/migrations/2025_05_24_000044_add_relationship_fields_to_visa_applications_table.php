<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToVisaApplicationsTable extends Migration
{
    public function up()
    {
        Schema::table('visa_applications', function (Blueprint $table) {
            $table->unsignedBigInteger('application_id')->nullable();
            $table->foreign('application_id', 'application_fk_10577139')->references('id')->on('applications');
        });
    }
}
