<?php

namespace restaurant;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //Type(dine-in, pick-up, delivery), customerId, staff who created this order; courseId list, payment part(sub total, tax, delivery fee, discount, etc.), Status(confirmed, printed, paid.)
    public function customer(){
        return $this->belongsTo('App\Customer');
    }
}
