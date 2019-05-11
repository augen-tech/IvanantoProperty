<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    //
    protected $fillable = [
        'path'
    ];

    public $timestamps = false;
}
