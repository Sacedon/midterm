<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'name',
        'description',
        'retail_price',
        'qty_stock',
        'category_id',
        'thumbnail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
