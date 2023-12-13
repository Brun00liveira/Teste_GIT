<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use app\Models\Profile;
use app\Models\Community;
use app\Models\Chapter;
use app\Models\Address;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'chapter_id',
        'profile_id',
        'community_id',
        'address_id',
        'photo',
        'birthday',
        'gender',
        'phone',
        'position',
        'company',
        'company_website',
        'segment',
        'port',
        'linkedin',
        'instagram'
    ];

    public function community():BelongsTo {

        return $this->belongsTo(Community::class);

        }

    public function chapter():BelongsTo {

        return $this->belongsTo(Chapter::class);

        }
    public function profile():BelongsTo {

        return $this->belongsTo(Profile::class);

        }
    public function address():BelongsTo {

        return $this->belongsTo(address::class);

        }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
