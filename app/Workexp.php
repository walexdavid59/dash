<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workexp extends Model
{
    protected $table = 'workexp';

    protected $fillable = [
        'date', 'time', 'empid', 'surname', 'organisation', 'designation', 'description', 'startdate', 'enddate'
    ];
}
