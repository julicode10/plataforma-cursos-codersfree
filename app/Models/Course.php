<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Course extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    /**
     * The attributes that guarded.
     *
     * @var array
     */
    protected $guarded = ['id', 'status'];

    /**
     * The attributes that withCount.
     *
     * @var array
     */
    protected $withCount = ['students', 'reviews'];

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
     * asesor
     */
    public function rating(): Attribute
    {
        return new Attribute(
            function($rating){
                if($this->reviews_count){
                    return round($this->reviews->avg('rating'), 1);
                }
                return 5;
            }
        );
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
    public function requirements(){
        return $this->hasMany(Requirement::class);
    }

    /**
     * The relation one to much
     *
     * @return void
     */
    public function goals(){
        return $this->hasMany(Goal::class);
    }

    /**
     * The relation one to much
     *
     * @return void
     */
    public function audiences(){
        return $this->hasMany(Audience::class);
    }

    /**
     * The relation one to much
     *
     * @return void
     */
    public function sections(){
        return $this->hasMany(Section::class);
    }

    /**
     * The inverse relation one to much
     *
     * @return void
     */
    public function teacher(){
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * The inverse relation one to much
     *
     * @return void
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * The inverse relation one to much
     *
     * @return void
     */
    public function level(){
        return $this->belongsTo(Level::class);
    }

    /**
     * The inverse relation one to much
     *
     * @return void
     */
    public function price(){
        return $this->belongsTo(Price::class);
    }

    /**
     * The inverse relation much to much
     *
     * @return void
     */
    public function students(){
        return $this->belongsToMany(User::class);
    }


    /**
     * The polymorfic relation one to one
     *
     * @return void
     */
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }

    /**
     * The hasManyThrough relation
     *
     * @return void
     */
    public function lessons(){
        return $this->hasManyThrough(Lesson::class, Section::class);
    }

    /**
     * The query scope
     *
     * @return void
     */
    public function scopeCategory($query, $category_id){
        if($category_id){
            return $query->where('category_id', $category_id);
        }
    }

    /**
     * The query scope levels
     *
     * @return void
     */
    public function scopeLevel($query, $level_id){
        if($level_id){
            return $query->where('level_id', $level_id);
        }
    }
}
