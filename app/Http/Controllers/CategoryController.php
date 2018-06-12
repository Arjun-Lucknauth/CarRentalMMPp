<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{
    //Add Category function
    public function addCategory (Request $request){
        if ($request->isMethod('post')){
            $data =$request->all();
            $category =new category;
            $category->name =$data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->description=$data['description'];
            $category->status=$data['status'];
            $category->URL=$data['URL'];
            $category->save();
            return redirect('/Admin/view_category')->with('flash_message_success','Category has been added Successful!');
        }
        //to avoid integrity constraint violation for description being empty.
        if(empty($category['parent_id'])){
            $category['parent_id'] = '';}
      $SubCat =Category::where(['parent_id'=>0])->get(); //will contain main category with parents
     return view('Admin.categories.add_category')->with(compact('SubCat'));
    }
    //End Add Category function

    //View category function
    public function viewCategory(){
    $categories = category::get();
        $categories = json_decode(json_encode($categories));
    return view('Admin.categories.view_category')->with(compact('categories'));
    }
    //End view category function

    //edit category function
    public function editCategory(Request $request, $id= null ){
      if($request->isMethod('post')){
        $data= $request->all();
       Category::where(['id'=> $id])-> update(['name'=>$data['category_name'], 'description' => $data ['description'],'url'=>$data['url'] ]);
       return redirect('/Admin/view_category')->with('flash_message_success','Category updated successfully');
      }
        $categoryDetails= Category :: where(['id' => $id])->first();
        $SubCat =Category::where(['parent_id'=>0])->get();
        return view('Admin.categories.edit_category')->with(compact('categoryDetails','SubCat'));
    }
    //End edit category function

    //Delete category function
    public function deleteCategory($id=null){
        if(!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Category has been deleted successfully');
        }



}
    //end category controller



}
