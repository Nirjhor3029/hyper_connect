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

class UniversityPartnership extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'university_partnerships';

    protected $appends = [
        'agreement_file',
    ];

    public const PARTNER_TYPE_SELECT = [
        'exclusive'     => 'exclusive',
        'non-exclusive' => 'non-exclusive',
    ];

    protected $dates = [
        'active_from',
        'active_to',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'university_id',
        'partner_name',
        'agreement_url',
        'active_from',
        'active_to',
        'partner_type',
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

    public function university()
    {
        return $this->belongsTo(University::class, 'university_id');
    }

    public function getActiveFromAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setActiveFromAttribute($value)
    {
        $this->attributes['active_from'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getActiveToAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setActiveToAttribute($value)
    {
        $this->attributes['active_to'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getAgreementFileAttribute()
    {
        return $this->getMedia('agreement_file');
    }
}
