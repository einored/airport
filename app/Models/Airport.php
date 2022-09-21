<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Country as C;
use App\Models\Airline as A;

class Airport extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(C::class, 'country_id', 'id');
    }

    public function airline()
    {
        return $this->belongsTo(A::class, 'airline_id', 'id');
    }
}
