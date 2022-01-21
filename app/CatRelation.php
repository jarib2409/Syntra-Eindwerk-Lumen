<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatRelation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cat1Id', 'cat2Id', 'relation'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}