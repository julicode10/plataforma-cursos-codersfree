<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;

    const LIKE = 1;
    const DISLIKE = 2;

    /**
     * The attributes that guarded.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The inverse relation one to much
     *
     * @return void
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     * The polymorfic relation
     *
     * @return void
     */
    public function reactionable(){
        return $this->morphTo();
    }
}
