<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop11SaleProduct extends Model
{
    use HasFactory;
    protected $table = 'shop11_sale_products'; // Specify the table name if different from the default

    protected $guarded = ['id']; // Guarded attributes, preventing mass assignment on 'id'

    public function saleProduct(){
        return $this->belongsTo(Shop11SaleProduct::class, 'sale_id', 'id');
    }

    public function saleUnit(){
        return $this->belongsTo(Shop05Unit::class, 'sale_unit_id', 'id');
    }

}
