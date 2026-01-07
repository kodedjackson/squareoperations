<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sop extends TenantModel
{
    protected $fillable = [
        'team_id', 'created_by', 'title', 'content', 'version', 'is_published',
    ];

    public function creator()   { return $this->belongsTo(User::class, 'created_by'); }
    public function versions()  { return $this->hasMany(SopVersion::class); }
}
