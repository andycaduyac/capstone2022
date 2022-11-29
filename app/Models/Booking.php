<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function cottage(){
        return $this->belongsTo('App\Models\Cottage');
    }

    public function functionhall(){
        return $this->belongsTo('App\Models\FunctionHall');
    }

    public function table(){
        return $this->belongsTo('App\Models\Table');
    }

    public function room(){
        return $this->belongsTo('App\Models\Room');
    }
}
