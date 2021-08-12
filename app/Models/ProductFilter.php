<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFilter extends Model
{
    use HasFactory;
    protected $table = 'product_filters';
    protected $fillable = [ 'subcategory_id', 'filter'];

    public function subcategories()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class)->using(ProductsFilters::class);
    }
}
