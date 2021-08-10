<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['article', 'title', 'description', 'properties', 'new_price',
        'previous_price', 'images', 'status_id'];
    public function status(){
        return $this->belongsTo(ProductStatus::class, 'status_id');

    }
    public function discounts()
    {
        return $this->belongsToMany(Discount::class)->using(ProductDiscount::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->using(ProductOrder::class);
    }
    public function favourites()
    {
        return $this->HasMany(Favourite::class);
    }
    public function comments()
    {
        return $this->HasMany(Comment::class);
    }
    public function subscriptions()
    {
        return $this->belongsTo(ProductSubscrition::class);
    }
    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
    public function types()
    {
        return $this->belongsTo(ProductType::class, 'type_id');
    }
    public function reviews()
    {
        return $this->belongsToMany(News::class)->using(ProductReview::class);
    }
}
