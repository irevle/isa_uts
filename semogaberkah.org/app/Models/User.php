<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
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

    // =====================
    // == Users - Members ==
    // =====================
    public function members(): HasMany
    {
        return $this->hasMany(Member::class, 'users_id');
    }

    public function getMemberInfo($idUser){
        $memberInfo = User::members()
                    ->where("users_id", $idUser)
                    ->get();
        return $memberInfo;
    }

    public function getDivisionMembers($division, $period){
        $memberDivision = User::members()
                        ->where("period", $period)
                        ->where("division", $division)
                        ->get();
        return $memberDivision;
    }

    public function getOurTeam($period){        
        if(!isset($period)){
            if($period < date_create("10-12-2026")){
                $period = 2025;
            }else{
                $period = 2026;
            }
        }

        $memberDivision = User::members()
                        ->where("period", $period)
                        ->get();
        return $memberDivision;
    }

    // ========================// $bursaSoal = BursaSoal::where('BursaSoal.year', '=', '2025')
        //              ->get();

        // $data=['navbar' => 'ourTeam',
        //        'bursaSoal'   => $bursaSoal];
    // == Users - Bursa_soal ==
    // ========================
    public function uploadSoal(): HasOneThrough
    {
        return $this->hasOneThrough(BursaSoal::class, Matkul::class);
    }

    public function getUploadSoal($idUser){
        $uploadSoal = User::nuploadSoal()
                    ->where('uploaded_by', $idUser)
                    ->get();
        return $uploadSoal;
    }
}
