<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function myclass_sections(){
        return $this->hasMany(MyclassSection::class, 'section_id', 'id');
        // 'section_id' is the foreign key in the 'myclass_sections' tablet
        // 'id' is the primary key in the 'sections' table
    }    

}
