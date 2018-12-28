<?php

namespace App;

use Glisandro\ModuleUser\UserTrait;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use UserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'phoneNumber'
    ];
}
