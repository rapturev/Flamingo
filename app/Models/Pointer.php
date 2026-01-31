<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Post;

class Pointer extends Model
{
    protected $fillable = [
        'post_id',
        'blog_id',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }
}
