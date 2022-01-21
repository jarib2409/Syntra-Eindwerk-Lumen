<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FosterRoommate extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'fosterfamilyId', 'relation', 'age'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}