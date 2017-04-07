<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // name, address, order history, payment information
    public function users()
    {
        return $this->morphMany('User', 'userable');
    }

}
