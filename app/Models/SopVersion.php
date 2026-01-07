<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SopVersion extends TenantModel
{
    protected $fillable = ['sop_id', 'version', 'content', 'changed_by', 'published_at'];

    public function sop()        { return $this->belongsTo(Sop::class); }
    public function changer()    { return $this->belongsTo(User::class, 'changed_by'); }
}
