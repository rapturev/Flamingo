<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User;
use App\Models\Post;

class Bookmark extends Model
{
    /** @use HasFactory<\Database\Factories\BookmarkFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
    ];

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function post(): HasOne
    {
        return $this->hasOne(Post::class);
    }
}
