<?php

namespace App\Models\CMS;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Auth\Authenticatable;
class Admins extends Authenticatable
{
    use HasFactory;
    
    protected $table = 'admin';
    protected $guard = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'password'];
    
    public function roles(): HasMany {
        return $this->hasMany(AdminRoles::class, 'admin_id', 'id');
    }
}
