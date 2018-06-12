<?php

namespace App\Http\Controllers;

use Auth;
use function bcrypt;
use Illuminate\Http\Request;
use function redirect;
use function view;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class UserController extends Controller
{
    //register
    public function showRegisterForm(){
        return view ('/Front/register');
    }
    public function register(Request $request){
       $this->validation ($request);
       $request['password']=bcrypt($request->password);
       User::create($request->all ());
        return redirect ('/')->with ('flash_message_success','Successfully Registered, please browse through our categories to view our fleet');
    }
    
    public function validation($request){
       return $this->validate( $request,[
        'name' =>'required|max:255',
        'email' =>'required|email|unique:Users|max:255',
           'password' =>'required|confirmed|max:255',
           ]);
    }
    
    public function showLoginForm(){
        return view ('/auth/login');
    }
    
    //start login function
    public function login(Request $request){
         $this->validate( $request,[
            'email' =>'required|email|max:255',
            'password' =>'required|max:255',
        ]);
        if(Auth::attempt (['email'=>$request->email,'password'=>$request->password])){
            return redirect ('/')->with('flash_message_success','You are login');
        }
            return redirect ('/')->with('flash_message_error','Wrong credential, try again!');
    }
    //end login function
    
    //Start Setting function
    public function setting(){
        return view('user.setting');
    }
    //end setting function
    
    //Logout function
    public function logout(){
        Session::flush();
        return redirect('/index')->with('flash_message_success','Log out Successful');
    }
    //end logout function
    //password check
    public function passwordChecker(Request $request){
        $data = $request ->all();
        $current_password = $data['current_password'];
        $check_password = User::first();
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
                User::where('id','2')->update(['password'=>$password]);
                return redirect('/user/setting')->with('flash_message_success'.'password updated successfully');
                
            } else{
                return redirect('/user/setting')->with('flash_message_error','Incorrect current password');
            }
            
        }
    }
    
   
    
}
