<?php

namespace App\Models\Interviews;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    public function user():BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id', 'id');
    }

    public function comments():HasMany {
        return $this->hasMany(Comment::class, 'post_id', 'id');
    }
}
