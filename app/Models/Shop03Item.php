<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop03Item extends Model
{
    use HasFactory;
    protected $table = 'shop03_items'; // Specify the table name if different from the default
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Shop02Category::class, 'category_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Shop04Product::class, 'item_id', 'id');
    }
}
