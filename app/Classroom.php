<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    //Fillable
    protected $fillable = [
        'name',
        'description'
    ];
}
