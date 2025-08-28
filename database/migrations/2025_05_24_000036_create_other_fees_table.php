<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherFeesTable extends Migration
{
    public function up()
    {
        Schema::create('other_fees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('service_fee', 15, 2);
            $table->integer('admission_fee')->nullable();
            $table->integer('visa_fee')->nullable();
            $table->integer('emgs_fee')->nullable();
            $table->integer('registration_fee')->nullable();
            $table->integer('resource_fee')->nullable();
            $table->integer('caution_fee')->nullable();
            $table->longText('other_fee_deatils')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
