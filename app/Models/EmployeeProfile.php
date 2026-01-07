<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeProfile extends TenantModel
{
    protected $fillable = [
        'team_id', 'user_id', 'employee_id', 'salary',
        'start_date', 'end_date', 'emergency_contacts',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
