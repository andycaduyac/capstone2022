<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primarykey = 'id';

    protected $guarded = [];

    public function booking(){
        return $this->belongsTo('App\Models\Booking');
    }
}
