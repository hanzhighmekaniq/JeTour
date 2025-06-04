<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ticket',
        'price',
        'rules',
        'open',
        'close',
        'type',
        'status',

        'destination_id',
    ];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'destination_id', 'id');
    }
    public function ticket(): HasMany
    {
        return $this->hasMany(Ticket::class, 'ticket_id', 'id');
    }
}
