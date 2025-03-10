<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studentdb extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function studentcrs(){
        return $this->hasMany(Studentcr::class, 'studentdb_id', 'id');
        // 'studentdb_id' is the foreign key in the 'studentcrs' tablet
        // 'id' is the primary key in the 'studentdb' table
    }


    public function myclass(){
        return $this->belongsTo(Myclass::class, 'stclass_id', 'id');
        // 'myclass_id' is the foreign key in the 'studentdbs' tablet
        // 'id' is the primary key in the 'myclasses' table
    }

    public function sections(){
        return $this->belongsTo(Section::class, 'stsection_id', 'id');
        // 'myclass_id' is the foreign key in the 'studentdbs' tablet
        // 'id' is the primary key in the 'myclasses' table
    }


}
