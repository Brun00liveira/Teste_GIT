<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Community;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chapter extends Model
{
    protected $fillable =
    [
        'name',
        'community_id'

    ];

    public function community():BelongsTo {

    return $this->belongsTo(Community::class);

    }

    public function User(): HasMany
    {
    return $this->hasMany(User::class);
    }
}
