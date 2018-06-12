<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;
class multipleHeaderComposer
{

    public function __construct()
    {
       $this-> $categoriesHeader = Category::with('categories')->where([ 'parent_id' => 0 ])->get ();//Get all categories
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with($this);
    }
}