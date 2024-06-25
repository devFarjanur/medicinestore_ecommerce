<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'address_id',
        'total_price',
        'payment_method',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Generate a unique 5-digit order number before creating a new order
        static::creating(function ($order) {
            $order->order_number = str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        });
    }
}