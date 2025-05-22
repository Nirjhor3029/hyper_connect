<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommissionSetting extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'commission_settings';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'agent_id',
        'university_id',
        'curse_id',
        'comission_commited',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function commissionSettingsCommissionDistributions()
    {
        return $this->hasMany(CommissionDistribution::class, 'commission_settings_id', 'id');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function curse()
    {
        return $this->belongsTo(Course::class, 'curse_id');
    }
}
