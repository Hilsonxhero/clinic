<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use App\Notifications\VerifyPhoneNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'media_id',
        'username',
        'email',
        'phone',
        'job',
        'national_number',
        'email_verified_at',
        'status',
        'two_factor_method',
        'two_factor',
        'is_superuser',
        'point',
        'ip',
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

    protected $appedns = ['profile','created'];


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    const TWO_FACTOR_SMS = "sms";
    const TWO_FACTOR_EMAIL = "email";
    static $two_factor_types = [self::TWO_FACTOR_SMS, self::TWO_FACTOR_EMAIL];


    const ACTIVE_STATUS = "active";
    const INACTIVE_STATUS = "inactive";
    static $statuses = [self::ACTIVE_STATUS, self::INACTIVE_STATUS];


    public function media()
    {
        return $this->belongsTo(Media::class, 'media_id');
    }


    public function getProfileAttribute()
    {
        if (!is_null($this->media))  return $this->media->thumb();

        return asset('panel/media/svg/files/blank-image.svg');
    }

    public function getCreatedAttribute()
    {
        return  verta($this->created_at)->formatDifference();
    }

    public function sendPhoneVerificationNotification($phone)
    {
        new VerifyPhoneNotification($phone);
    }
}
