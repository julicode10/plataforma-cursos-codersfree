<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
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
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
