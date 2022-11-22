<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
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
                ->orWhere('name', 'like', $term);
        });
    }
}
