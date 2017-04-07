<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    // name, id, password, time-tracking, pay rate, etc.
    // can make order, assign order to self.
    public function users()
    {
        return $this->morphMany('User', 'userable');
    }
}
