<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeStructure extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function feeCategory(){
        return $this->belongsTo(FeeCategory::class, 'fee_category_id','id');
        // 'fee_category_id' is the foreign key in the 'fee_structures' table
        // 'id' is the primary key in the 'fee_categories' table
    }

    public function feeParticular(){
        return $this->belongsTo(FeeParticular::class,'fee_particular_id','id');
        // 'fee_particular_id' is the foreign key in the 'fee_structures' table
        // 'id' is the primary key in the 'fee_particulars' table
    }

    public function myclass(){
        return $this->belongsTo(MyClass::class,'myclass_id','id');
        // 'myclass_id' is the foreign key in the 'fee_structures' table
        // 'id' is the primary key in the 'myclasses' table
    }


    public function feeSpecials(){
        return $this->hasMany(FeeSpecial::class, 'fee_structure_id', 'id');
        // 'fee_structure_id' is the foreign key in the 'fee_specials' table
        // 'id' is the primary key in the 'fee_structures' table
    }

    

}
