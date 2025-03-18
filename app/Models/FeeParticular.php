<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeParticular extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function feeCategory(){
        return $this->belongsTo(FeeCategory::class, 'fee_category_id','id');
        // 'fee_category_id' is the foreign key in the 'fee_particulars' table
        // 'id' is the primary key in the 'fee_categories' table
    }

    public function feeStructures(){
        return $this->hasMany(FeeStructure::class,'fee_particular_id','id');
        // 'fee_particular_id' is the foreign key in the 'fee_structures' table
        // 'id' is the primary key in the 'fee_particulars' table
    }
}
