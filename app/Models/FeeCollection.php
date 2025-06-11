<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeCollection extends Model
{
    use HasFactory;
    protected $fillable = [
        'myclass_id',
        'section_id',
        'studentcr_id',
        'fee_mandate_id',
        'fee_mandate_date_id',
        'total_amount',
        'paid_amount',
        'balance_amount',
        'status',
        'user_id',
    ];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function feeCollectionDetails(){
        return $this->hasMany(FeeCollectionDetail::class, 'fee_collection_id', 'id');
        // This defines a one-to-many relationship with FeeCollectionDetail
        // where 'fee_collection_id' is the foreign key in FeeCollectionDetail
        // and 'id' is the local key in FeeCollection
    }
    public function myclass(){
        return $this->belongsTo(Myclass::class, 'myclass_id', 'id');
    }


    public function section()  {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }


    public function studentcr()    {
        return $this->belongsTo(Studentcr::class, 'studentcr_id', 'id');
    }


    public function feeMandate()    {
        return $this->belongsTo(FeeMandate::class, 'fee_mandate_id', 'id');
    }


    public function feeMandateDate()    {
        return $this->belongsTo(FeeMandateDate::class, 'fee_mandate_date_id', 'id');
    }


    public function user()    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function getStatusAttribute($value)
    {
        return $value === 'paid' ? 'Paid' : 'Unpaid';
    }
    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('Y-m-d H:i:s');
    }
    public function getFormattedUpdatedAtAttribute()
    {
        return $this->updated_at->format('Y-m-d H:i:s');
    }
    public function getTotalAmountAttribute($value)
    {
        return number_format($value, 2);
    }

}
