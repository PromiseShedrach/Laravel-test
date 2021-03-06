<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    //get all workshops under an event
    public function workshops()
    {
        return  $this->hasMany(Workshop::class);
    }
}
