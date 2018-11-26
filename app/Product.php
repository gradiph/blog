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

    /**
     * Mutator
     */

    /**
     * Relationship
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->using('App\ProductTag');
    }
}
