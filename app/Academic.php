<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $table = 'academics';

    protected $fillable = [
        'date', 'time', 'empid', 'surname', 'othername', 'school', 'qualification', 'grade', 'startdate', 'enddate'
    ];
}
