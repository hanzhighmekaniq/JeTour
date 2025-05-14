<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lodging extends Model
{

    protected $table = 'lodgings';

    protected $fillable = [
        'nama',
        'deskripsi',
        'lokasi',
        'tipe',
        'harga',
        'gambar'
    ];
}
