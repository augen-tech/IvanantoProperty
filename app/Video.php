<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $fillable = [
        'link',
        'title',
        'description',
        'path'
    ];

    public $timestamps = false;
}