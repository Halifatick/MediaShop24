<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $fillable = ['status_id', 'delivery_id', 'payment_id', 'user_id', 'name',
        'phone', 'price', 'quantity', 'delivery_datetime'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function delivery()
    {
        return $this->belongsTo(DeliveryMethod::class, 'delivery_id');
    }

    public function status()
    {
        return $this->belongsTo(OrderStatus::class, 'status_id');
    }

    public function payment()
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_id');
    }

    public function products()
    {
        return $this->HasMany(ProductOrder::class);
    }

    public function comments()
    {
        return $this->HasMany(Comment::class);
    }
}
