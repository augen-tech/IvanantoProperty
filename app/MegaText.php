<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MegaText extends Model
{
    //
    public $table = "megatexts";
    protected $fillable = [
        'value'        
    ];

    public $timestamps = false;
}
