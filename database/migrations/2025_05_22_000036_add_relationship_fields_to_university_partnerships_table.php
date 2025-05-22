<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUniversityPartnershipsTable extends Migration
{
    public function up()
    {
        Schema::table('university_partnerships', function (Blueprint $table) {
            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id', 'university_fk_10576322')->references('id')->on('universities');
        });
    }
}
