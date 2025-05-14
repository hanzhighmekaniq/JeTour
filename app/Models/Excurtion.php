<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Destination;

class Excurtion extends Model
{
    protected $fillable = [
        'name',
        'rules',
        'open',
        'close',
        'destination_id',
    ];

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function getImageAttribute($value)
    {
        return asset('storage/' . $value);
    }

}
