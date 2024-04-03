<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Admins extends Model
{
    use HasFactory;
    protected $table = 'admin';
    public function roles(): HasMany {
        return $this->hasMany(AdminRoles::class, 'admin_id', 'id');
    }
    // public function adminRoles(): MorphTo {
    //     return $this->morphTo();
    // }
}
