<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intake_term')->nullable();
            $table->integer('intake_year')->nullable();
            $table->string('status')->nullable();
            $table->boolean('is_fast_track')->default(0)->nullable();
            $table->boolean('needs_interview')->default(0)->nullable();
            $table->datetime('interview_date')->nullable();
            $table->longText('notes')->nullable();
            $table->datetime('submitted_at')->nullable();
            $table->datetime('decision_at')->nullable();
            $table->datetime('finalized_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
