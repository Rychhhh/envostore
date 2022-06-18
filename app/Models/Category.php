<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    protected $guarded = 'id';

    public function getRouteKeyName()
    {
        return 'nama_kategori';
    }

    public function Product()
    {
        return $this->hasMany('\App\Models\Product', 'category_id', 'id');
    }
}
