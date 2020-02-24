<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'name', 'email', 'phone','address','image','longitude','latitude',
    ];
}
