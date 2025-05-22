<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusLogsTable extends Migration
{
    public function up()
    {
        Schema::create('status_logs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('related_type')->nullable();
            $table->integer('related')->nullable();
            $table->longText('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
