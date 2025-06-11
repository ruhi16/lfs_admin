<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeMandate extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'fee_mandates';


    public function mandateDates(){
        return $this->hasMany(FeeMandateDate::class, 'fee_mandate_id', 'id');

    }

    public function myclass(){
        return $this->belongsTo(Myclass::class, 'myclass_id', 'id');
        // 'myclass_id' is the foreign key in the 'fee_mandates' table
        // 'id' is the primary key in the 'myclasses' table
    }



}
