<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;



class headerController extends Controller
{
    public function Front_header()
    {
        $categoriesHeader = Category::with('categories')->where([ 'parent_id' => 0 ])->get ();//Get all categories

        /*$categoriesHeader= json_decode( json_encode ( $categoriesHeader));
        echo "<pre>"; print_r ( $categoriesHeader); die; */ //test if array is working or not, it is coming just fine.

       /* $category_header = "";
        foreach ( $categoriesHeader as $cat ){
         $category_header .= "<div class='col-lg-3 col-md-6'>
                        <h5>Categories</h5>
                        <ul class='list-unstyled mb-3'>
                            <li class='nav-item'><a href='.'/vehicles/'.$cat->url.' class='nav-link'>.$cat->name.</a></li>
                        </ul>";
         }*/

        return view('layouts.FrontLayout.Front_header')->with(compact('categoriesHeader','category_header'));
    }
}
