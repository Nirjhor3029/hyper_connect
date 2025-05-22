<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStatusLogsTable extends Migration
{
    public function up()
    {
        Schema::table('status_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('status_from_id')->nullable();
            $table->foreign('status_from_id', 'status_from_fk_10577163')->references('id')->on('users');
            $table->unsignedBigInteger('status_to_id')->nullable();
            $table->foreign('status_to_id', 'status_to_fk_10577164')->references('id')->on('users');
            $table->unsignedBigInteger('changed_by_id')->nullable();
            $table->foreign('changed_by_id', 'changed_by_fk_10577165')->references('id')->on('users');
        });
    }
}
