<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAgentCommissionsTable extends Migration
{
    public function up()
    {
        Schema::table('agent_commissions', function (Blueprint $table) {
            $table->unsignedBigInteger('agent_id')->nullable();
            $table->foreign('agent_id', 'agent_fk_10577125')->references('id')->on('agents');
            $table->unsignedBigInteger('application_id')->nullable();
            $table->foreign('application_id', 'application_fk_10577126')->references('id')->on('applications');
        });
    }
}
