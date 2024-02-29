<?php

namespace App\Models\Admins;

use App\Models\Admins\Modules;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Roles extends Model
{
    use HasFactory;

    // One-to-Many
    public function admins(): HasMany {
        return $this->hasMany(Admin::class, "role_id", 'id');
    }

    public function modules():BelongsToMany {
        return $this->belongsToMany(Modules::class, 'role_modules', 'role_id', 'module_id');
    }
}
