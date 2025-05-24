<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class University extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'universities';

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'country_id',
        'name',
        'code',
        'university_type',
        'address',
        'university_details',
        'accreditation',
        'website',
        'contact_email',
        'contact_phone',
        'logo_url',
        'is_active',
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

    public function universityUniversityPartnerships()
    {
        return $this->hasMany(UniversityPartnership::class, 'university_id', 'id');
    }

    public function universityPrograms()
    {
        return $this->hasMany(Program::class, 'university_id', 'id');
    }

    public function universityApplications()
    {
        return $this->hasMany(Application::class, 'university_id', 'id');
    }

    public function universityCommissionFromUniversities()
    {
        return $this->hasMany(CommissionFromUniversity::class, 'university_id', 'id');
    }

    public function universitySubjects()
    {
        return $this->hasMany(Subject::class, 'university_id', 'id');
    }

    public function chossenUniversityStudents()
    {
        return $this->hasMany(Student::class, 'chossen_university_id', 'id');
    }

    public function universityCommissionSettings()
    {
        return $this->hasMany(CommissionSetting::class, 'university_id', 'id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }
}
