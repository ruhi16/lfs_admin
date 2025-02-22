<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UiScreenDesign extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function screen(){
        return $this->belongsTo(UiScreen::class, 'ui_screen_id', 'id');
    }

    public function section(){
        return $this->belongsTo(UiSection::class, 'ui_section_id', 'id');
    }

    public function particular(){
        return $this->belongsTo(UiParticular::class, 'ui_particular_id', 'id');
    }
}
