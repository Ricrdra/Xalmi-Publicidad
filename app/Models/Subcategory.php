<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public $timestamps = false;


    use HasFactory;

    public function categories()
    {
        $this->belongsToMany(Category::class);
    }
}
