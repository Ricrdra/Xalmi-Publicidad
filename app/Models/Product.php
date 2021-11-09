<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;

    use HasFactory;

    public function category(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Category::class);
    }

    public function ProductImages(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductImage::class);
    }

}
