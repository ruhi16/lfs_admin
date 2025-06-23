<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop05Unit extends Model
{
    use HasFactory;
    protected $table = 'shop05_units'; // Specify the table name if different from the default
    protected $guarded = ['id'];


    public function purchaseUnits(){
        return $this->hasMany(Shop09PurchaseProduct::class, 'purchase_unit_id', 'id');
    }

    public function saleUnits(){
        return $this->hasMany(Shop11SaleProduct::class, 'sale_unit_id', 'id');
    }


}
