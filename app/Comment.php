<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'product_id',
        'text',
    ];

    protected $guarded = [];

    protected $casts = [
        'user_id' => 'integer',//unsignedInteger
        'product_id' => 'integer',//unsignedInteger
        'text' => 'string',//string
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected $touches = [
        'product',
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
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
