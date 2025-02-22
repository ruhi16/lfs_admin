<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiScreen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function designs(){
        return $this->hasMany(UiScreenDesign::class, 'ui_screen_id', 'id');
    }


    public function UiSections(){
        return $this->hasMany(UiSection::class, 'ui_screen_id', 'id');
    }

}
