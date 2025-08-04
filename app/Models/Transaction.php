<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'type',
        'amount',
        'category_id',
        'user_id',
        'description',
        'transaction_date',
        'photo',
    ];

    /**
     * Get the category associated with the transaction.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user associated with the transaction.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
