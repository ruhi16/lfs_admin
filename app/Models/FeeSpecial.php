<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeSpecial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function feeStructure(){
        return $this->belongsTo(FeeStructure::class, 'fee_structure_id', 'id');
        // 'fee_structure_id' is the foreign key in the 'fee_specials' table
        // 'id' is the primary key in the 'fee_structures' table
    }




}
