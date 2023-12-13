<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Chapter;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Community extends Model
{
    protected $fillable = [
        'name'
    ];

    public function Chapter(): HasMany
    {
    return $this->hasMany(Chapter::class);
    }

    public function User(): HasMany
    {
    return $this->hasMany(User::class);
    }

}

