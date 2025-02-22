<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiParticular extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function designs(){
        return $this->hasMany(UiScreenDesign::class, 'ui_screen_id', 'id');
    }
}
