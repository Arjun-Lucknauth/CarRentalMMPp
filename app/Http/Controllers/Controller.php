<?php

namespace App\Http\Controllers;

use App\Category;
use App\vehicle;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //global function to be used on any page we require
    public static function mainCategories(){
        $mainCategories = Category::where(['parent_id'=>0])->get();

        return $mainCategories;
    }

}
