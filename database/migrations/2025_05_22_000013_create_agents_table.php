<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agency_name')->nullable();
            $table->string('tier')->nullable();
            $table->string('license_number')->nullable();
            $table->string('kyc_status')->nullable();
            $table->longText('banking_info')->nullable();
            $table->longText('commission_policy')->nullable();
            $table->boolean('is_active')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
