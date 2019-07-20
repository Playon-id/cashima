<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function cart()
    {
        return view("order.cart");
    }
}
