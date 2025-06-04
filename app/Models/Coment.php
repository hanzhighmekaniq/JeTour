<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai konvensi (comments), tentukan secara eksplisit
    protected $table = 'comments';

    // Kolom yang bisa diisi mass-assignment
    protected $fillable = [
        'comment',
        'rating',
        'user_id',
        'destination_id',
    ];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke destinasi
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
