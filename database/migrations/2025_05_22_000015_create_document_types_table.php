<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentTypesTable extends Migration
{
    public function up()
    {
        Schema::create('document_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->longText('required_for_levels')->nullable();
            $table->boolean('is_translatable')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
