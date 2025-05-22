<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommissionDistribution extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'commission_distributions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_id',
        'commission_settings_id',
        'is_commission_paid',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function commission_settings()
    {
        return $this->belongsTo(CommissionSetting::class, 'commission_settings_id');
    }
}
