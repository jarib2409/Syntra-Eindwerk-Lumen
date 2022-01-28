<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdopterRoommate extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adopterId', 'relation', 'age', 'allergic', 'permission'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $table = 'adopterRoommates';

}