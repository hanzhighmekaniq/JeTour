<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culinary extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'culinaries';
    protected $fillable = [
        'title',
        'description',
        'address',
        'open',
        'close',
        'price',
        'image',
        'multiple_images',
        'destination_id',
    ];
}
