<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

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
        'prenom',
        'phone_number',
        'city',
        'BloodGroup',
        'DateDernierDon',
        'email',
        'password',
    ];

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

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['BloodGroup'] ?? false,
            function ($query, $bloodgroup) {
                return $query->where('BloodGroup', $bloodgroup);
            }
        );

        $query->when(
            $filters['city'] ?? false,
            function ($query, $city) {
                return $query->where('city', $city);
            }
        );
    }


    public static function getReadyDonors()
    {
        $lastDonationThreshold = Carbon::now()->subDays(56);

        return static::where('DateDernierDon', '>', $lastDonationThreshold)
            ->get();
    }

    public static function getOtherDonorsCanDonateTo($bloodGroup, $city = null)
    {
        $readyDonors = static::getReadyDonors();

        if (!empty($bloodGroup)) {
            $otherDonors = $readyDonors->where('BloodGroup', '!=', $bloodGroup);

            if ($city) {
                $otherDonors = $otherDonors->where('city', $city);
            }

            return $otherDonors->paginate(10, ['*'], 'other-donors')
                ->appends(request()->except('other-donors'));
        }

        return [];
    }
}
