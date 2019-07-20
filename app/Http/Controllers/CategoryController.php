<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function showcategory()
    {
        $category = \App\Category::paginate(8);
        return view("category.index",['category' => $category]);
    }
}
