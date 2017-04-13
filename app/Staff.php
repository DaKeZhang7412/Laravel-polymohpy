<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function employees()
    {
        return $this->morphOne('Employee', 'employeeable');
    }
}
