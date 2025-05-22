<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgentCommission extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'agent_commissions';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'agent_id',
        'application_id',
        'source_type',
        'commission_type',
        'base_amount',
        'percentage',
        'final_amount',
        'currency',
        'payout_method',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }
}
