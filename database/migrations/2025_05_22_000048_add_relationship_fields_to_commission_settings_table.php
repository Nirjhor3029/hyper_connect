<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCommissionSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('commission_settings', function (Blueprint $table) {
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->foreign('agent_id', 'agent_fk_10581734')->references('id')->on('agents');
            $table->unsignedBigInteger('university_id')->nullable();
            $table->foreign('university_id', 'university_fk_10581735')->references('id')->on('universities');
            $table->unsignedBigInteger('curse_id')->nullable();
            $table->foreign('curse_id', 'curse_fk_10581736')->references('id')->on('courses');
        });
    }
}
