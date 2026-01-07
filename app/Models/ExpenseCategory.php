<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends TenantModel
{
    protected $fillable = ['team_id', 'name', 'description'];

    public function expenses()
    {
        return $this->hasMany(Expense::class, 'category_id');
    }
}
