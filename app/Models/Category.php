<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'type'];

    /**
     * Get the transactions associated with the category.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    /**
     * Get the budgets associated with the category.
     */
    public function budgets()
    {
        return $this->hasMany(Budget::class);
    }
}
