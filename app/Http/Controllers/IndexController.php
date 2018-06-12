<?php

namespace App\Http\Controllers;
use App\Category;
use App\Vehicle;
use Illuminate\Http\Request;
class IndexController extends Controller
{
    public function index(){
        $allVehicles = Vehicle::paginate(8); //Get all vehicles to display on index page
        $categoryCount = Category::count();
        $VehicleCount = Vehicle::count();
        $categories = Category::where(['parent_id'=>0])->get();//Get all categories

        return view('index')->with(compact('allVehicles','categories','categoryCount','VehicleCount'));
    }
    public function account(){
        return view('Front.UsersAccount.account');
    }
    public function about(){
        return view('Front.about');
    }
    public function register(){
        return view('Front.register');
    }
    public function wishList(){
        return view('Front.UsersAccount.wishList');
    }
    public function rent(){
        return view('Front.UsersAccount.rent');
    }
    public function contact(){
       return view('Front.contact');
    }
    public function general(){
        ;
    }
}
