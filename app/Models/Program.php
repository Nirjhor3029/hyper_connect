<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Program extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'programs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'university_id',
        'name',
        'short_code',
        'field_of_study',
        'education_type',
        'level',
        'duration_months',
        'credit_hours',
        'fees',
        'fee_breakdown',
        'teaching_language',
        'semester_intake_months',
        'requirements',
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

    public function programApplications()
    {
        return $this->hasMany(Application::class, 'program_id', 'id');
    }

    public function programsStudents()
    {
        return $this->belongsToMany(Student::class);
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
