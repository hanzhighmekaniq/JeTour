<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'status',
        'total_price',
        'payment_method',
        'order_id',
        'gross_amount',
        'payment_type',
        'transaction_id',
        'transaction_time',
        'transaction_status',
        'snap_token',
        'quantity',
    ];

    public function detailTransactions(): HasMany
    {
        return $this->hasMany(DetailTransaction::class, 'transaction_id', 'id');
    }
}
