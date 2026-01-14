<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walk extends Model
{
    /** @use HasFactory<\Database\Factories\WalkFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
    ];
}
