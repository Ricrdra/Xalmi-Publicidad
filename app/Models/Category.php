<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Category extends Model
{
    public $timestamps = false;
    use HasFactory;

    function products(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    function subcategory(): Relations\HasOne
    {
        return $this->hasOne(Subcategory::class);
    }

}
