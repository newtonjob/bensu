<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class SubCategory extends Model
{
    use HasFactory;

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function brands(): HasManyThrough
    {
        return $this->hasManyThrough(Brand::class, Product::class,
        'sub_category_id', // Foreign key on the products table
        'id', // Local key on the subcategories table
        'id', // Local key on the products table
        'brand_id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
