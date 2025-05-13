<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culinary extends Model
{
    use HasFactory;
    protected $table = 'culinaries';
    protected $fillable = [
        'title',
        'description',
        'location',
        'open',
        'close',
        'image',
        'multiple_images',
        'destination_id',
    ];
    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'id');
    }
}
