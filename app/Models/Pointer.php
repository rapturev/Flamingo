<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pointer extends Model
{
    protected $fillable = [
        'post_id',
        'blog_id',
    ]
}
