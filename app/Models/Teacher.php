<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard_name = 'teacher';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'city_id',
        'teaching_language_id',
        'school',
        'brief',
        'youtube',
        'image',
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

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function years()
    {
        return $this->belongsToMany(Year::class);
    }

    public function phones()
    {
        return $this->morphMany(Phone::class, 'phoneable');
    }

    public function lang()
    {
        return $this->hasOne(Language::class,'id','teaching_language_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function sites()
    {
        return $this->hasMany(Site::class);
    }
    public function images()
    {
        return $this->morphMany(File::class, 'fileable');
    }
}
