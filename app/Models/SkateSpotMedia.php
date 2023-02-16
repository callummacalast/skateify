<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkateSpotMedia extends Model
{
    use HasFactory;
    protected $table = 'skate_spots_media';

    public function skate_spot()
    {
        return $this->belongsTo(SkateSpot::class);
    }
}
