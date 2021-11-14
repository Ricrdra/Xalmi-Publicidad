<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Category extends Model
{
    public $timestamps = false;
    use HasFactory;

    function products(): Relations\HasMany
    {
        return $this->hasMany(Product::class, 'id', 'category_id');
    }

    function subcategory(): Relations\HasOne
    {
        return $this->hasOne(Subcategory::class);
    }

}
