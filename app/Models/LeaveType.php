<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeaveType extends TenantModel
{
    protected $fillable = ['team_id', 'name', 'default_days_per_year', 'requires_approval'];

    public function leaveRequests()
    {
        return $this->hasMany(LeaveRequest::class);
    }
}
