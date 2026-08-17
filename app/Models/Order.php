<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Morilog\Jalali\Jalalian;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'address_id',
        'order_number',
        'total_price',
        'discount_amount',
        'shipping_cost',
        'final_price',
        'payment_status',
        'status',
        'tracking_code'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    //shamsi date accessor
    //frist install -> composer require morilog/jalali
    public function getJalaliCreatedAtAttribute()
    {
        return Jalalian::fromDateTime($this->created_at)->format('Y/m/d');
    }
}
