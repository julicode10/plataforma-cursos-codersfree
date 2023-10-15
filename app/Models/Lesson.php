<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    /**
     * The attributes that guarded.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The asesor
     *
     * @var void
     */
    public function getCompletedAttribute()
    {
        return $this->users->contains(auth()->user()->id);
    }


    /**
     * The relation one to one
     *
     * @return void
     */
    public function description(){
        return $this->hasOne(Description::class);
    }

    /**
     * The inverse relation one to much
     *
     * @return void
     */
    public function section(){
        return $this->belongsTo(Section::class);
    }

    /**
     * The inverse relation one to much
     *
     * @return void
     */
    public function platform(){
        return $this->belongsTo(Platform::class);
    }

    /**
     * The inverse relation much to much
     *
     * @return void
     */
    public function users(){
        return $this->belongsToMany(User::class);
    }

    /**
     * The polymorfic relation one to one
     *
     * @return void
     */
    public function resource(){
        return $this->morphOne(Resource::class, 'resourceable');
    }

    /**
     * The polymorfic relation one to much
     *
     * @return void
     */
    public function comments(){
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * The polymorfic relation one to much
     *
     * @return void
     */
    public function reactions(){
        return $this->morphMany(Reaction::class, 'reactionable');
    }
}
