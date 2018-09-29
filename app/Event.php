<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'event', 'startdate', 'enddate', 'description', 'added_by', 'added_on',
    ];
}
