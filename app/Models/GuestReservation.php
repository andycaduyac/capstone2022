<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestReservation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, $term)
    {
        collect(explode(" ", $term))
            ->filter()
            ->each(function ($term) use($query){
                $term = '%'.$term.'%';
                $query->where('type', 'like', $term)
                ->orWhere('reservation_date', 'like', $term)
                ->orWhere('remember_token', 'like', $term)
                ->orWhere('first_name', 'like', $term)
                ->orWhere('last_name', 'like', $term);
        });
    }
}
