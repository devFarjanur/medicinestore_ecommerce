<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shipment_address',
        'shipment_appartment',
        'shipment_state',
        'shipment_zipcode',
        'billing_address',
        'billing_appartment',
        'billing_state',
        'billing_zipcode'
    ];
}
