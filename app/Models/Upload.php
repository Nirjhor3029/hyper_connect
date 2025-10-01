<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_path',
        'file_custom_name',
        'file_type',
        'file_size',
        'student_id'
        
    ];
}
