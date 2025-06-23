<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop04Product;

class Shop02Category extends Model
{
    use HasFactory;
    protected $table = 'shop02_categories'; // Specify the table name if different from the default
    protected $guarded = ['id'];
   

    public function products(){
        return $this->hasMany(Shop04Product::class, 'category_id', 'id');
    }

    public function items()
    {
        return $this->hasMany(Shop03Item::class, 'category_id', 'id');
    }
}
