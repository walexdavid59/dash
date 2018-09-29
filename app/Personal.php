<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $table = 'personaldatas';

    protected $fillable = [
        'date', 'time', 'empid', 'empdate', 'surname', 'othername', 'dob', 'sex', 'state', 'localgovt', 'marital', 'religion', 'phone', 'email', 'address', 'kin',
    ];

    public function salary()
 {
    return $this->hasMany('Salary','empid');
 }
}
