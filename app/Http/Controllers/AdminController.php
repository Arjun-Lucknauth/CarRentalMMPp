<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\user;
use \Illuminate\Support\Facades\Hash;
use App\Category;
use App\vehicle;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //start login function
    public function login(Request $request){
        if($request->isMethod('Post')){
            $data= $request->input();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1']))
            {

          return redirect('Admin/dashboard');
            }
            else{

           return redirect('/Admin')->with('flash_message_error', 'Invalid Username or Password');

            }
        }
        return view('Admin.admin_login');
    }
    //end login function

    //Start Dashboard function
    public function dashboard(){
        return view('Admin.dashboard');
    }
    //end Dashboard function

    //Start Setting function
    public function setting(){
        return view('Admin.setting');
    }
    //end setting function
    public function commerce(){
        return view('Admin.commerce');
    }

    //Logout function
    public function logout(){
        Session::flush();
        return redirect('/Admin')->with('flash_message_success','Log out Successful');
    }
    //end logout function
    //password check
    public function passwordChecker(Request $request){
        $data = $request ->all();
        $current_password = $data['current_password'];
        $check_password = User::where(['admin'=>'1'])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        } else {
            echo "false"; die;
        }
    }

    //update password
    public function update_password(Request $request){
        if($request->isMethod('post')){
            $data =$request->all();
            $check_password =User::where(['email'=> Auth::user()->email])->first();
            $current_password =$data['current_password'];
            if(Hash::check($current_password,$check_password->password)){
                $password=bcrypt($data['new_password']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/Admin/setting')->with('flash_message_success'.'password updated successfully');

            } else{
                return redirect('/Admin/setting')->with('flash_message_error','Incorrect current password');
            }

        }
    }

    //show amount of categories, vehicles on dashboard (to implement sales)
    public function amount(){
        $categoryCount = Category::count();
        $VehicleCount = Vehicle::count();
        return view('Admin.commerce',compact('categoryCount','VehicleCount'));
    }
    
    
 //end of AdminController
}
