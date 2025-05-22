<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommissionFromUniversity extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'commission_from_universities';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'university_id',
        'course_id',
        'comission',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
