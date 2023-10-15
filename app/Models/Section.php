<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    /**
     * The attributes that guarded.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The relation one to much
     *
     * @return void
     */
    public function lessons(){
        return $this->hasMany(Lesson::class);
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
