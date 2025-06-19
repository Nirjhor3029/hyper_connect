<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Student extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'students';

    protected $dates = [
        'dob',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const GENDER_SELECT = [
        'male' => 'Male',
        'felame' => 'Female',
        'others' => 'Others',
    ];

    protected $appends = [
        'photo',
        'academic_certificates',
        'attachments',
        'medical_certificates',
        'offer_letter_attachments',
    ];

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'nationality_id',
        'country_id',
        'education_level_id',
        'confirm_university_id',
        'confirm_country_id',
        'confirm_subject_id',
        'confirm_program_id',
        'blood_group',
        'passport_expiry',
        'address',
        'current_address',
        'permanent_address',
        'dob',
        'gender',
        'passport_no',
        'emergency_contact',
        'guardian_details',
        'education_background',
        'lead_agent_id',
        'handelling_agent_id',
        'academic_details',
        'offer_letter_details',
        'additional_requirements',
        'val_status',
        'emgs_status',
        'commission_amount',
        'is_offer_given_to_student',
        'offer_details',
        'visa_status',
        'payment_status',
        'current_status',
        'scholarship_status',
        'enrollement_status',
        'is_commission_claimed_from_univeristy',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function studentApplications()
    {
        return $this->hasMany(Application::class, 'student_id', 'id');
    }

    public function studentCommissionDistributions()
    {
        return $this->hasMany(CommissionDistribution::class, 'student_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function nationality()
    {
        return $this->belongsTo(Nationality::class, 'nationality_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getDobAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function lead_agent()
    {
        return $this->belongsTo(Agent::class, 'lead_agent_id');
    }

    public function handelling_agent()
    {
        return $this->belongsTo(Agent::class, 'handelling_agent_id');
    }

    public function interested_countries()
    {
        return $this->belongsToMany(Country::class);
    }

    public function univertsities()
    {
        return $this->belongsToMany(University::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function programs()
    {
        return $this->belongsToMany(Program::class);
    }

    public function course_interesteds()
    {
        return $this->belongsToMany(Course::class);
    }

    public function academic_attachments()
    {
        return $this->belongsToMany(Document::class);
    }

    public function getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();
        if ($file) {
            $file->url = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview = $file->getUrl('preview');
        }

        return $file;
    }

    public function getAcademicCertificatesAttribute()
    {
        return $this->getMedia('academic_certificates');
    }

    public function getAttachmentsAttribute()
    {
        return $this->getMedia('attachments');
    }

    public function getMedicalCertificatesAttribute()
    {
        return $this->getMedia('medical_certificates');
    }
    public function getOfferLetterAttachmentsAttribute()
    {
        return $this->getMedia('offer_letter_attachments');
    }
}
