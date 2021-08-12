<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $fillable = ['title', 'category_id'];

    public function filters()
    {
        return $this->HasMany(ProductFilter::class);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function products()
    {
        return $this->HasMany(Product::class);
    }
}
