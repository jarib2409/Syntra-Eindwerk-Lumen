<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatPicture extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 
        'catId', 'photoId'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    protected $table = 'catPictures';

}