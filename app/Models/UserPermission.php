<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dashboard',
        'company_branches',
        'brands',
        'add_item',
        'items_list',
        'add_vehicle',
        'vehicle_list',
        'is_registered',
        'add_customer',
        'customer_list',
        'appointment',
        'customer_payment',
        'add_supplier',
        'supplier_list',
        'supplier_payment',
        'finance_payment',
        'finance_loan',
        'finance_bank',
        'sales_reports',
        'income_report',
        'expense_report',
        'inventory_analytics',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
