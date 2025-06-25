<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop02Category;

class Shop04Product extends Model
{
    use HasFactory;
    protected $table = 'shop04_products'; // Specify the table name if different from the default
    protected $guarded = ['id'];
    

    public function category(){
        return $this->belongsTo(Shop02Category::class, 'category_id', 'id');
    }

    public function item(){
        return $this->belongsTo(Shop03Item::class, 'item_id', 'id');
    }


}
