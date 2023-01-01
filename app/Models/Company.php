<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table='companies';

    public $fillable = [
        'user_id',
        'name',
        'email',
        'phone_number',
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'user_id' => 'integer'
    ];
}
