<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class address extends Model
{
    protected $fillable = [
    'zip_code',
    'city',
    'neighborhood',
    'number',
    'complement'
    ];

    public function User(): HasMany
    {
    return $this->hasMany(User::class);
    }
}
