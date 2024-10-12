<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'make',
        'vmodel',
        'year',
        'vin',
        'chasis_number',
        'engine_number',
        'license_plate_number',
        'color',
        'engine_type',
        'mileage',
        'features',
        'price',
        'registration_date',
        'number_of_last_own',
        'owner_name',
        'last_owner_address',
        'insurance_details',
        'last_service_records',
        'purchase_date',
        'purchase_price',
        'location',
        'notes',
        'status',
        'availability',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
