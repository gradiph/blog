<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $casts = [
        'name' => 'string',//string
        'email' => 'string',//email
    ];

    protected $hidden = [
        'password', 'remember_token',
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
}
