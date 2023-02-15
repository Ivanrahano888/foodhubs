<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
 {
     return view('guest');
 }

    public function login(){
        if(view::exists('guest.login')){
            return view('guest.login');
        
        }else{
            return abort(404);
        }
    }
}
