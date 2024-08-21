<?php

namespace App\Models\Interviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function posts():HasMany {

        return $this->hasMany(Post::class, 'user_id', 'id');

    }

    public function commentUser():HasManyThrough {
        return $this->hasManyThrough(Comment::class, Post::class, 'user_id', 'post_id', 'id', 'id');
    }

    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id')->withPivot('title');
    }
}
