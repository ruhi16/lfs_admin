<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop08Purchase extends Model
{
    use HasFactory;
    protected $table = 'shop08_purchases'; // Specify the table name if different from the default
    protected $guarded = ['id'];

    public function purchaseProducts(){
        return $this->hasMany(Shop09PurchaseProduct::class, 'purchase_id', 'id');
    }

    


}
