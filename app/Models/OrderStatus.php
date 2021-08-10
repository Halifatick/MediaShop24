<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;
    protected $table = 'order_statuses';
    protected $fillable = ['title'];
    public function orders()
    {
        return $this->HasMany(Order::class);
    }
}