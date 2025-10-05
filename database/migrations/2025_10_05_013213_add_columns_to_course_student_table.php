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
        Schema::table('course_student', function (Blueprint $table) {
            $table->bigIncrements('id', true)->before('student_id');
            $table->string('status')->nullable()->after('course_id');
            $table->string('offer_letter_path')->nullable()->after('status');
            $table->string('offer_letter_file_name')->nullable()->after('offer_letter_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('course_student', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('offer_letter_path');
            $table->dropColumn('offer_letter_file_name');
            
            
        });
    }
};
