<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentStudentPivotTable extends Migration
{
    public function up()
    {
        Schema::create('document_student', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id', 'student_id_fk_10581701')->references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('document_id');
            $table->foreign('document_id', 'document_id_fk_10581701')->references('id')->on('documents')->onDelete('cascade');
        });
    }
}
