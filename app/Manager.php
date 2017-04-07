<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    // name, id, password, time-tracking, pay rate, etc.
    //store manager, run different report; has all the access.

    public function users()
    {
        return $this->morphMany('User', 'userable');
    }
}
