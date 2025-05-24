<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOfferLettersTable extends Migration
{
    public function up()
    {
        Schema::table('offer_letters', function (Blueprint $table) {
            $table->unsignedBigInteger('application_id')->nullable();
            $table->foreign('application_id', 'application_fk_10577151')->references('id')->on('applications');
            $table->unsignedBigInteger('issued_by_id')->nullable();
            $table->foreign('issued_by_id', 'issued_by_fk_10577154')->references('id')->on('users');
        });
    }
}
