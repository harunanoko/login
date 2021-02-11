<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Validator;

class RegisterController extends Controller
{
  
   public function index()
   {
       return view('register.register');
   }


   public function post(LoginRequest $request)
   {
     $list1 = $request->name;
   
    return view('loggedin.loggedin',compact('list1'));
   
   }

}
