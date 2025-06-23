<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop12SaleUserWishlist extends Model
{
    use HasFactory;
    protected $table = 'shop12_sale_user_wishlists'; // Specify the table name if different from the default
    protected $guarded = ['id']; // Guarded attributes, preventing mass assignment on '

    public function wishedProducts()
    {
        return $this->hasMany(Shop04Product::class, 'product_id', 'id');
    }
    
}
