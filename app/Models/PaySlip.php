<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaySlip extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'upload_id',
        'transaction_date',
        'category',
        'bank_account_number',
        'amount',
    ];
}
