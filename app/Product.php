<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";

    public function category()
    {
        return $this->belongsToMany('App\ProductCategory', 'product_category', 'category_id', 'product_id');
    }

    public function order()
    {
        return $this->belongsToMany('App\ProductOrder', 'product_order', 'category_id', 'product_id');
    }
}
