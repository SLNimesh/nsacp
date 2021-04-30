<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTime;

class Channel extends Model
{
    use HasFactory;

    public function channelDate()
    {
        return $this->hasMany(ChannelDate::class);
    }

    public function validChannelDates()
    {
        return $this->channelDate()->where('date', '>=', new DateTime());
    }
    
}
