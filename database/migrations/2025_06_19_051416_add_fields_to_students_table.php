<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('confirm_university_id')->nullable();
            $table->foreign('confirm_university_id', 'confirm_university_fk_10576289')->references('id')->on('universities');
            $table->unsignedBigInteger('confirm_country_id')->nullable();
            $table->foreign('confirm_country_id', 'confirm_country_fk_10585206')->references('id')->on('countries');
            $table->unsignedBigInteger('confirm_subject_id')->nullable();
            $table->foreign('confirm_subject_id', 'confirm_subject_fk_10581695')->references('id')->on('subjects');
            $table->unsignedBigInteger('confirm_program_id')->nullable();
            $table->foreign('confirm_program_id', 'confirm_program_fk_10581696')->references('id')->on('programs');
            $table->date('passport_expiry')->nullable();
            $table->string('blood_group')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('confirm_university_fk_10576289');
            $table->dropColumn('confirm_university_id');

            $table->dropForeign('confirm_country_fk_10585206');
            $table->dropColumn('confirm_country_id');

            $table->dropForeign('confirm_subject_fk_10581695');
            $table->dropColumn('confirm_subject_id');

            $table->dropForeign('confirm_program_fk_10581696');
            $table->dropColumn('confirm_program_id');

            $table->dropColumn('passport_expiry');
            $table->dropColumn('blood_group');
        });
    }

};
