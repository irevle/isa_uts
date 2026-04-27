<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use function Illuminate\Support\years;
use function Symfony\Component\Clock\now;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'full_name',
        'email',
        'password',
        'NRP',
        'status',
        'social_media'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function members(): HasMany
    {
        return $this->hasMany(Member::class, 'users_id');
    }

    public function getMemberInfo($idUser){
        $memberInfo = User::where('id', $idUser)->members()
                    ->get();
        return $memberInfo;
    }

    public function uploadSoal(): HasMany
    {
        return $this->hasMany(BursaSoal::class, 'uploaded_by');
    }
}
