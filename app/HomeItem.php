<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeItem extends Model
{
    //
    protected $fillable = [
        'title',
        'description',
        'path'
    ];

    public $timestamps = false;
}
