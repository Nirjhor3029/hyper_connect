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

class Application extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'applications';

    protected $dates = [
        'interview_date',
        'submitted_at',
        'decision_at',
        'finalized_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_id',
        'university_id',
        'program_id',
        'agent_id',
        'sub_agent_id',
        'intake_term',
        'intake_year',
        'status',
        'is_fast_track',
        'needs_interview',
        'interview_date',
        'notes',
        'submitted_at',
        'decision_at',
        'finalized_at',
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

    public function applicationDocuments()
    {
        return $this->hasMany(Document::class, 'application_id', 'id');
    }

    public function applicationPayments()
    {
        return $this->hasMany(Payment::class, 'application_id', 'id');
    }

    public function applicationAgentCommissions()
    {
        return $this->hasMany(AgentCommission::class, 'application_id', 'id');
    }

    public function applicationVisaApplications()
    {
        return $this->hasMany(VisaApplication::class, 'application_id', 'id');
    }

    public function applicationOfferLetters()
    {
        return $this->hasMany(OfferLetter::class, 'application_id', 'id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class, 'agent_id');
    }

    public function sub_agent()
    {
        return $this->belongsTo(Agent::class, 'sub_agent_id');
    }

    public function getInterviewDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setInterviewDateAttribute($value)
    {
        $this->attributes['interview_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getSubmittedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setSubmittedAtAttribute($value)
    {
        $this->attributes['submitted_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getDecisionAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setDecisionAtAttribute($value)
    {
        $this->attributes['decision_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getFinalizedAtAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setFinalizedAtAttribute($value)
    {
        $this->attributes['finalized_at'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
}
