<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAdmissionStatusesTable extends Migration
{
    public function up()
    {
        Schema::table('admission_statuses', function (Blueprint $table) {
            $table->unsignedBigInteger('admission_stage_id')->nullable();
            $table->foreign('admission_stage_id', 'admission_stage_fk_10595659')->references('id')->on('admission_stages');
        });
    }
}
