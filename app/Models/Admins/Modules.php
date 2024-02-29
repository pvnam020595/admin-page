<?php

namespace App\Models\Admins;

use App\Models\Admins\Roles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Modules extends Model
{
    use HasFactory;

    public function roles(): BelongsToMany {
        return $this->belongsToMany(Roles::class, 'role_modules', 'module_id', 'role_id');
    }
}
