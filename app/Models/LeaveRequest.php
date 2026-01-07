<?php

namespace App\Models;



class LeaveRequest extends TenantModel
{
    protected $fillable = [
        'team_id', 'user_id', 'leave_type_id', 'start_date', 'end_date',
        'days_requested', 'reason', 'status', 'approved_by',
    ];

    public function user()        { return $this->belongsTo(User::class); }
    public function type()        { return $this->belongsTo(LeaveType::class, 'leave_type_id'); }
    public function approver()    { return $this->belongsTo(User::class, 'approved_by'); }
}
