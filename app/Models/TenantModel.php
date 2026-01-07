<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


abstract class TenantModel extends Model
{
    protected static function booted()
    {
        static::addGlobalScope('team', function ($builder) {
            $user = Auth::user();

            // ---- SUPER-ADMIN BYPASS ----
            if ($user && $user->is_platform_admin) {
                return;   // no WHERE clause → sees everything
            }

            if ($user?->currentTeam?->id) {
                $builder->where(
                    $builder->getModel()->getTable() . '.team_id',
                    $user->currentTeam->id
                );
            }
        });

        static::creating(function ($model) {
            $user = Auth::user();

            // Platform admin can create records in ANY team
            if ($user?->is_platform_admin) {
                return;
            }

            if (is_null($model->team_id)) {
                $model->team_id = $user?->currentTeam?->id;
            }
        });
    }
}
