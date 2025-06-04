<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Category;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'regionCode',
        'description',
        'image',
        'multiple_images',
        'content',
        'fasility',    // pastikan ejaan sesuai kebutuhan
        'location',
        'latitude',
        'longitude',
        'price',
        'category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function culinary(): HasMany
    {
        return $this->hasMany(Culinary::class, 'destination_id', 'id');
    }
    public function ticket(): HasMany
    {
        return $this->hasMany(Ticket::class, 'destination_id', 'id');
    }
    public function coments(): HasMany
    {
        return $this->hasMany(Coment::class, 'destination_id', 'id');
    }
}
