<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['gender','name','date','breed','furColor', 'furLength', 'chipNumber', 'preferences', 'adoptionStatus'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}