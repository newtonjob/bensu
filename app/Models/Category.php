<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;

    public function name(): Attribute
    {
        return Attribute::get(fn ($value) => str($value)->title());
    }

    /**
     * Determine if the category is featured.
     */
    public function isFeatured()
    {
        return (bool) $this->featured_at;
    }

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function products(): HasManyThrough
    {
        return $this->hasManyThrough(Product::class, SubCategory::class, secondKey: 'sub_category_id', secondLocalKey: 'id');
    }
}
