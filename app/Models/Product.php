<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Scope the query to only include featured products.
     */
    public function scopeFeatured(Builder $builder)
    {
        $builder->whereNotNull('featured_at');
    }

    /**
     * Scope the query to only include discounted products.
     */
    public function scopeDiscounted(Builder $builder)
    {
        $builder->where('discount', '>', 0);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['q'] ?? false, fn($query, $search) =>           
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('model_no', 'like', '%' . $search . '%')
            );

        $query->when($filters['category'] ?? false, fn($query, $category) =>           
            $query->whereHas('category', fn ($query) => 
                $query->where('categories.slug', $category)
            )
        );

        $query->when($filters['sub-category'] ?? false, fn($query, $subCategory) =>           
            $query->whereHas('subCategory', fn ($query) => 
                $query->where('sub_categories.slug', $subCategory)
            )
        );
    }

    public function isFeatured(): bool
    {
        return (bool) $this->featured_at;
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, OrderProduct::class)->withTimestamps();
    }

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function category(): HasOneThrough
    {
        return $this->hasOneThrough(Category::class, SubCategory::class,
        'category_id', // Foreign key on the subcategories table...
        'id', // Foreign key on the categories table...
        'sub_category_id', // Local key on the products table...
        'id' // Local key on the subCategories table...
        );
    }
}
