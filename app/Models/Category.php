<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

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
}
