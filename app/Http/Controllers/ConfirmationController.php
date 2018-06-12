<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function index(){
      if (!session()->has('flash_success_message')) {
          return redirect('/');
        }

        return view('Front.shop.rent.confirmation');
    }
}
