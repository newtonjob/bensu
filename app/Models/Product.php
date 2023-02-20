<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
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

    public function scopeSearch(Builder $builder)
    {
        $keyword = request()->str('q')->squish(); // Todo: Prepare keyword for better results.

        if ($keyword->isNotEmpty()) {
            $builder->whereFullText(['name', 'tags'], $keyword.'*', ['mode' => 'boolean']);
        }
    }

    public function scopeFilter(Builder $builder)
    {
        $builder->when(request('category'),
            fn ($builder, $category) => $builder->whereRelation('subCategory.category', 'slug', $category)
        )->when(request('sub-category'),
            fn ($builder, $subCategory) => $builder->whereRelation('subCategory', 'slug', $subCategory)
        );
    }

    public function isFeatured(): bool
    {
        return (bool) $this->featured_at;
    }

    public function price(): Attribute
    {
        return Attribute::get(fn ($value, $attributes) => $value * (1 - $attributes['discount'] / 100));
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
}
