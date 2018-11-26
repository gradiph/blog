<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'view_count',
    ];

    protected $guarded = [];

    protected $casts = [
        'name' => 'string',//string
        'description' => 'string',//text
        'price' => 'integer',//integer
        'view_count' => 'integer',//integer
    ];

    protected $dates = [
        'deleted_at',
    ];

    /**
     * Accessor
     */
    public function getLikedCountAttribute()
    {
        return $this->likes()->count();
    }

    /**
     * Mutator
     */

    /**
     * Relationship
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function likes()
    {
        return $this->belongsToMany('App\User', 'like')->using('App\Like');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag')->using('App\ProductTag');
    }
}
