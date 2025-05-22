<?php

namespace App\Models;

use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfferLetter extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'offer_letters';

    protected $dates = [
        'issue_date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'application_id',
        'file_url',
        'issue_date',
        'issued_by_id',
        'delivery_status',
        'visible_to_student',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function application()
    {
        return $this->belongsTo(Application::class, 'application_id');
    }

    public function getIssueDateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setIssueDateAttribute($value)
    {
        $this->attributes['issue_date'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function issued_by()
    {
        return $this->belongsTo(User::class, 'issued_by_id');
    }
}
