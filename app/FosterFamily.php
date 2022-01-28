<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FosterFamily extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'dateOfBirth', 'street', 'number', 'city', 'zipCode', 'email', 'availableSpots', 'preferences' 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $table = 'fosterFamilies';

}