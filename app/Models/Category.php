<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // protected $table = 'categories';

    // protected $guarded = 'id';

    // public function setSlugAttribute($value)
    // {
    //     $this->attributes['slug'] = Str::slug($value, '-');
    // }
    

    // // Relasi ke product
    // public function Product()
    // {
    //     return $this->hasMany('\App\Models\Product', 'products_id', 'id');
    // }
}
