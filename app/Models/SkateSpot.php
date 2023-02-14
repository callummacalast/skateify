<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkateSpot extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function skate_spots_media()
    {
        return $this->hasMany(SkateSpotMedia::class, 'skatespot_id');
    }
}
