<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'path'
    ];

    public $timestamps = false;
}

