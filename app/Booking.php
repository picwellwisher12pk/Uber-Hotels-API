<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name', 'checkin', 'checkout','phone','email','numberOfPeople','room_id','hotel_id'
    ];
}
