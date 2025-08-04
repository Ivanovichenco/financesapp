<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
        'user_id',
        'amount_asigned',
        'amount_spent',
        'mounth',
        'year',
        'type',
        'category_id',
    ];

    /**
     * Get the user associated with the budget.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the category associated with the budget.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
