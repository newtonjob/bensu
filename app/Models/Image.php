<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function src(): Attribute
    {
        return Attribute::get(fn ($value) => cloudinary_url($value, 230, true));
    }
}
