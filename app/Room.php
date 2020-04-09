<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'type', 'beds', 'facilities','price','no_of_guests','status','hotel_id',
    ];
    protected $casts = ['facilities'=>'array'];
    public function hotel(){
        return $this->belongsTo("App\Hotel");
    }
}
