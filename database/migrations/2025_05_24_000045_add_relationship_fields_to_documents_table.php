<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDocumentsTable extends Migration
{
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('application_id')->nullable();
            $table->foreign('application_id', 'application_fk_10577085')->references('id')->on('applications');
            $table->unsignedBigInteger('document_type_id')->nullable();
            $table->foreign('document_type_id', 'document_type_fk_10577104')->references('id')->on('document_types');
            $table->unsignedBigInteger('verified_by_id')->nullable();
            $table->foreign('verified_by_id', 'verified_by_fk_10577090')->references('id')->on('users');
        });
    }
}
