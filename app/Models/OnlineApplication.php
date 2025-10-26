<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineApplication extends Model
{
    use HasFactory;


    protected $fillable = [
        'applicantType',
        'email',
        'firstName',
        'lastName',
        'passportNumber',
        'studentIdNumber',
        'gender',
        'marital',
        'religion',
        'date_of_birth',
        'phone',
        'father_phone',
        'address',
        'street',
        'city',
        'state',
        'country',
        'postal_code',
        'highest_qualification',
        'graduation_date',
        'awarding_institution',
        'work_experience',
        'campus',
        'intake',
        'study_type',
        'sponsorships',
        'external_scholarships',
        'photo',
        'passport_copy',
        'english_transcript',
        'academic_results',
    ];

    protected $casts = [
        'sponsorships' => 'array',
        'academic_results' => 'array',
        'graduation_date' => 'date',
        'date_of_birth' => 'date',
    ];
}
