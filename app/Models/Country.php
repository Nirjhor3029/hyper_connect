<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'countries';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'short_code',
        'region',
        'iso_code',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function countryUsers()
    {
        return $this->hasMany(User::class, 'country_id', 'id');
    }

    public function countryUniversities()
    {
        return $this->hasMany(University::class, 'country_id', 'id');
    }

    public function countryAgents()
    {
        return $this->hasMany(Agent::class, 'country_id', 'id');
    }

    public function countryStates()
    {
        return $this->hasMany(State::class, 'country_id', 'id');
    }

    public function interestedCountriesStudents()
    {
        return $this->belongsToMany(Student::class);
    }
}
