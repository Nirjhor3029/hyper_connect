<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCommissionDistributionsTable extends Migration
{
    public function up()
    {
        Schema::table('commission_distributions', function (Blueprint $table) {
            $table->unsignedBigInteger('student_id')->nullable();
            $table->foreign('student_id', 'student_fk_10581742')->references('id')->on('students');
            $table->unsignedBigInteger('commission_settings_id')->nullable();
            $table->foreign('commission_settings_id', 'commission_settings_fk_10581743')->references('id')->on('commission_settings');
        });
    }
}
