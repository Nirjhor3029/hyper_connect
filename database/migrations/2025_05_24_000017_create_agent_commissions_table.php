<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentCommissionsTable extends Migration
{
    public function up()
    {
        Schema::create('agent_commissions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source_type')->nullable();
            $table->string('commission_type')->nullable();
            $table->decimal('base_amount', 15, 2)->nullable();
            $table->float('percentage', 15, 2)->nullable();
            $table->decimal('final_amount', 15, 2)->nullable();
            $table->string('currency')->nullable();
            $table->string('payout_method')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
