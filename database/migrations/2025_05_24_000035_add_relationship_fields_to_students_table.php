<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStudentsTable extends Migration
{
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_10576289')->references('id')->on('users');
            $table->unsignedBigInteger('lead_agent_id')->nullable();
            $table->foreign('lead_agent_id', 'lead_agent_fk_10581695')->references('id')->on('agents');
            $table->unsignedBigInteger('handelling_agent_id')->nullable();
            $table->foreign('handelling_agent_id', 'handelling_agent_fk_10581696')->references('id')->on('agents');
            $table->unsignedBigInteger('chossen_university_id')->nullable();
            $table->foreign('chossen_university_id', 'chossen_university_fk_10581711')->references('id')->on('universities');
            $table->unsignedBigInteger('subject_id')->nullable();
            $table->foreign('subject_id', 'subject_fk_10581712')->references('id')->on('subjects');
        });
    }
}
