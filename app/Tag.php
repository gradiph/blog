<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = FALSE;

    protected $fillable = [
        'name',
        'search_count',
    ];

    protected $guarded = [];

    protected $casts = [
        'name' => 'string',//string
        'search_count' => 'integer',//integer
    ];

    /**
     * Accessor
     */
    public function getUsedCountAttribute()
    {
        return $this->products()->count();
    }

    /**
     * Mutator
     */

    /**
     * Relationship
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')->using('App\ProductTag');
    }
}
