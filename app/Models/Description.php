<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    /**
     * The attributes that guarded.
     *
     * @var array
     */
    protected $guarded = ['id'];
    /**
     * The inverse relation one to one
     *
     * @return void
     */
    public function lesson(){
        return $this->belongsTo(Lesson::class);
    }
}
