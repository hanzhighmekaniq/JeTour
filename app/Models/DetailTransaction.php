<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailTransaction extends Model
{
    // Nama tabel (opsional jika mengikuti konvensi Laravel)
    protected $table = 'detail_transactions';

    // Field yang bisa diisi secara mass-assignment
    protected $fillable = [
        'transaction_id',
        'ticket_id',
        'quantity',
        'subtotal',
    ];

    /**
     * Relasi ke model Transaction
     */
    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transactions::class, 'transaction_id', 'id');
    }


    /**
     * Relasi ke model Ticket
     */
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }
}
