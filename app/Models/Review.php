<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

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
     * The inverse relation one to much
     *
     * @return void
     */
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
