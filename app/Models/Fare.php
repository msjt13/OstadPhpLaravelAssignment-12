<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin_id',
        'destination_id',
        'price'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function origin()
    {
        return $this->belongsTo(Stop::class, 'origin_id', 'id', 'origin');
    }

    public function destination()
    {
        return $this->belongsTo(Stop::class, 'destination_id', 'id', 'destination');
    }

}
