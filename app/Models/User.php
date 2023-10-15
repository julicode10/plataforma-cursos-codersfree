<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The relation one to one
     *
     * @return void
     */
    public function profile(){
        return $this->hasOne(Profile::class);
    }

    /**
     * The relation one to much
     *
     * @return void
     */
    public function courses_dictated(){
        return $this->hasMany(Course::class);
    }

    /**
     * The relation one to much
     *
     * @return void
     */
    public function reviews(){
        return $this->hasMany(Review::class);
    }

    /**
     * The relation one to much
     *
     * @return void
     */
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    /**
     * The relation one to much
     *
     * @return void
     */
    public function reactions(){
        return $this->hasMany(Reaction::class);
    }

    /**
     * The relation much to much
     *
     * @return void
     */
    public function courses_enrolled(){
        return $this->belongsToMany(Course::class);
    }

    /**
     * The inverse relation much to much
     *
     * @return void
     */
    public function lessons(){
        return $this->belongsToMany(Lesson::class);
    }

}
