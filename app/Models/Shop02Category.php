<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop04Product;

class Shop02Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'created_by',
        'updated_by',
    ];

    public function products()
    {
        return $this->hasMany(Shop04Product::class, 'category_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(Shop03Item::class, 'category_id', 'id');
    }
}
