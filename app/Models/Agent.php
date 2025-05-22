<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Agent extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'agents';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'agency_name',
        'parent_agent_id',
        'tier',
        'license_number',
        'kyc_status',
        'banking_info',
        'commission_policy',
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

    public function parentAgentAgents()
    {
        return $this->hasMany(self::class, 'parent_agent_id', 'id');
    }

    public function agentApplications()
    {
        return $this->hasMany(Application::class, 'agent_id', 'id');
    }

    public function subAgentApplications()
    {
        return $this->hasMany(Application::class, 'sub_agent_id', 'id');
    }

    public function agentAgentCommissions()
    {
        return $this->hasMany(AgentCommission::class, 'agent_id', 'id');
    }

    public function leadAgentStudents()
    {
        return $this->hasMany(Student::class, 'lead_agent_id', 'id');
    }

    public function handellingAgentStudents()
    {
        return $this->hasMany(Student::class, 'handelling_agent_id', 'id');
    }

    public function agentCommissionSettings()
    {
        return $this->hasMany(CommissionSetting::class, 'agent_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parent_agent()
    {
        return $this->belongsTo(self::class, 'parent_agent_id');
    }
}
