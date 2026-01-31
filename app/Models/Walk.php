<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\User;

class Walk extends Model
{
    /** @use HasFactory<\Database\Factories\WalkFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
