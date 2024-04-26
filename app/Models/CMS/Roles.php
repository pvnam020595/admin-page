<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Roles extends Model
{
    use HasFactory;

    public function admins(): BelongsToMany {
        return $this->belongsToMany(Admins::class, 'admin_roles', 'role_id', 'admin_id');
    }
}
