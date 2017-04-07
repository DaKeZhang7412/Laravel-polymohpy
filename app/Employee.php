<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;


Relation::morphMap([
    'manager'=>'Manager',
    'staff'=>'Staff',
]);


class Employee extends Model
{
    // name, id, password, time-tracking, pay rate, etc.
    // can make order, assign order to self.
    public function users()
    {
        return $this->morphMany('User', 'userable');
    }

    protected function employeeable() {
        return $this->morphTo();
    }
}
