<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'quantity'
    ];

    public function Kategori()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }
}
