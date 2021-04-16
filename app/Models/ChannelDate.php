<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelDate extends Model
{
    use HasFactory;

    public function channel() 
    {
        return $this->belongsTo(Channel::class);
    }

    public function appointment() 
    {
        return $this->hasMany(Appointment::class);
    }
}
