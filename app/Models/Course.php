<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'courses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
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
}
