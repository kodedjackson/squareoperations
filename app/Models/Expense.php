<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends TenantModel
{
    protected $fillable = [
        'team_id', 'user_id', 'category_id', 'amount', 'date',
        'receipt_path', 'description', 'project', 'status', 'approved_by',
    ];

    public function user()          { return $this->belongsTo(User::class); }
    public function category()      { return $this->belongsTo(ExpenseCategory::class); }
    public function approver()      { return $this->belongsTo(User::class, 'approved_by'); }
}
