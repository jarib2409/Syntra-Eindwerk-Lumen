<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdopterPet extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adopterId', 'species', 'age', 'usedToCats', 'personality' 
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}