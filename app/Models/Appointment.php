<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'is_company',
        'company',
        'vehicle_id',
        'appointment_date',
        'appointment_time',
        'purpose',
        'notes',
        'status',
    ];
}
