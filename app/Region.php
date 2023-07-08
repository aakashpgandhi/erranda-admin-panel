<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public $fillable = [
        'id',
        'state_id',
        'name'
    ];
}
