<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'salarys';

    protected $fillable = [
        'empid', 'emptype', 'house', 'medical', 'special', 'providentallow', 'otherallow', 'tax', 'providentdeduct', 'otherdeduct', 'gross', 'net', 'total',
    ];

    public function personal() {
        return $this->belongsTo('Personal');
      }

}
