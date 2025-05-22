<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionDistributionsTable extends Migration
{
    public function up()
    {
        Schema::create('commission_distributions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_commission_paid')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
