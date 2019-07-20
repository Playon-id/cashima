<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function showproduct()
    {
        $product = \App\Product::paginate(8);
        return view("product.index", ['products' => $product]);
    }

    public function dashboard()
    {
        $product = \App\Product::paginate(8);
        return view("welcome", ['products' => $product]);
    }

    public function detail($id)
    {
        $product = \App\Product::findOrFail($id);
        $category = \App\Category::get();
        $ctg = \App\Product::get();
        return view("product.detail", ['product' => $product,'category' => $category, 'categories' => $ctg]);
    }
}
