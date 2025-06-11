<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeCollectionDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function feeCollection(){
        return $this->belongsTo(FeeCollection::class, 'fee_collection_id', 'id');
        // This defines a many-to-one relationship with FeeCollection
        // where 'fee_collection_id' is the foreign key in FeeCollectionDetail
        // and 'id' is the local key in FeeCollection
    }


    public function feeStructure(){
        return $this->belongsTo(FeeStructure::class, 'fee_structure_id', 'id');
        // This defines a many-to-one relationship with FeeStructure
        // where 'fee_structure_id' is the foreign key in FeeCollectionDetail
        // and 'id' is the local key in FeeStructure
    }


    public function feeCategory(){
        return $this->belongsTo(FeeCategory::class, 'fee_category_id', 'id');
        // This defines a many-to-one relationship with FeeCategory
        // where 'fee_category_id' is the foreign key in FeeCollectionDetail
        // and 'id' is the local key in FeeCategory
    }
    public function feeParticular(){
        return $this->belongsTo(FeeParticular::class, 'fee_particular_id', 'id');
        // This defines a many-to-one relationship with FeeParticular
        // where 'fee_particular_id' is the foreign key in FeeCollectionDetail
        // and 'id' is the local key in FeeParticular
    }


}
