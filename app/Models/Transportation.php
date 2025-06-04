<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;

    // Jika nama tabel tidak sesuai konvensi jamak Laravel
    protected $table = 'transportations';

    // Jika kamu ingin menentukan kolom yang bisa diisi
    protected $fillable = [
        'type',
        'name',
        'image',
        'operational',
        'close',
        'price',
    ];

    // Format waktu jika diperlukan (opsional)
    protected $casts = [
        'operational' => 'datetime:H:i',
        'close' => 'datetime:H:i',
    ];
}
