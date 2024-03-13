<?php

namespace App\Models\Admins;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Permissions extends Model
{
    use HasFactory;

    public function roles(): BelongsToMany {
        return $this->belongsToMany(Roles::class, 'role_permissions', 'permission_id', 'role_id');
    }
}
