<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop07UnitRefPts extends Model
{
    use HasFactory;
    protected $table = 'shop07_unit_ref_pts'; // Specify the table name if different from the default
    protected $guarded = ['id'];

    public function purchase(){
        return $this->belongsTo(Shop08Purchase::class, 'purchase_id', 'id');
    }

    public function purchaseProduct(){
        return $this->belongsTo(Shop09PurchaseProduct::class, 'purchase_product_id', 'id');
    }

    public function saleUnitRef(){
        return $this->belongsTo(Shop05Unit::class, 'sale_unit_id', 'id');
    }

}
