<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferLettersTable extends Migration
{
    public function up()
    {
        Schema::create('offer_letters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('file_url')->nullable();
            $table->datetime('issue_date')->nullable();
            $table->string('delivery_status')->nullable();
            $table->boolean('visible_to_student')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
