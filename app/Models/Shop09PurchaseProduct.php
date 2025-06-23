<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop09PurchaseProduct extends Model
{
    use HasFactory;
    protected $table = 'shop09_purchase_products'; // Specify the table name if different from the default
    protected $guarded = ['id'];


    public function purchaseProduct(){
        return $this->belongsTo(Shop09PurchaseProduct::class, 'purchase_id', 'id');
    }

    public function purchaseUnit(){
        return $this->belongsTo(Shop05Unit::class, 'purchase_unit_id', 'id');
    }
}
