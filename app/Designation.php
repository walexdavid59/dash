<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $table = 'designations';

    protected $fillable = [
        'designation', 'department', 'description', 'user', 'added_on', 'status',
    ];
}
