<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";

    public function product()
    {
        return $this->belongsToMany('App\ProductOrder', 'product_order', 'order_id', 'product_id');
    }

    public function user()
    {
        return $this->belongsToMany('App\User', 'user', 'user_id');
    }
}
