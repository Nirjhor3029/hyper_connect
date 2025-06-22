<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Course extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const COURSE_MODE_RADIO = [
        'full_time' => 'Full_time',
        'part_time' => 'Part_time',
        'odl'       => 'Odl',
    ];

    public const ENGLISH_REQUIREMENT_RADIO = [
        'no'    => 'no',
        'any'   => 'any',
        'ielts' => 'IELTS',
        'moi'   => 'MOI',
        'pte'   => 'PTE',
        'toefl' => 'TOEFL',
    ];

    protected $fillable = [
        'university_id',
        'program_id',
        'course_mode',
        'name',
        'duration',
        'total_fees',
        'no_of_semester',
        'course_details',
        'url',
        'scholarship',
        'commission',
        'english_requirement',
        'custom_message_for_student',
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

    public function courseCommissionFromUniversities()
    {
        return $this->hasMany(CommissionFromUniversity::class, 'course_id', 'id');
    }

    public function courseSubjects()
    {
        return $this->hasMany(Subject::class, 'course_id', 'id');
    }

    public function curseCommissionSettings()
    {
        return $this->hasMany(CommissionSetting::class, 'curse_id', 'id');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
