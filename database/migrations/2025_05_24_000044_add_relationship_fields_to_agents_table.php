<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAgentsTable extends Migration
{
    public function up()
    {
        Schema::table('agents', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id', 'country_fk_10585104')->references('id')->on('countries');
            $table->unsignedBigInteger('parent_agent_id')->nullable();
            $table->foreign('parent_agent_id', 'parent_agent_fk_10576972')->references('id')->on('agents');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_10576967')->references('id')->on('users');
        });
    }
}
