<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'dateOfBirth', 'gender', 'street', 'number', 'city', 'zipCode', 'phonenumber', 'housing', 'ownGarden', 'ownPen', 'experiencedCats', 'experiencedPets', 'hasVet', 'allowedOutside', 'hoursAllone', 'preferences'   
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}