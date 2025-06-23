<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop10Sale extends Model
{
    use HasFactory;
    protected $table = 'shop10_sales'; // Specify the table name if different from the default
    protected $guarded = ['id']; // Specify the fields that should not be mass assign

    public function saleProducts(){
        return $this->hasMany(Shop11SaleProduct::class, 'sale_id', 'id');
    }
}
