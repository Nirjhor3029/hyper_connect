<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type')->nullable();
            $table->string('method')->nullable();
            $table->decimal('amount', 15, 2)->nullable();
            $table->string('currency')->nullable();
            $table->date('payment_date')->nullable();
            $table->string('receipt_url')->nullable();
            $table->string('invoice_url')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
