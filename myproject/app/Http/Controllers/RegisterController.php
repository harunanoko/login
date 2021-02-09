<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Validator;

class RegisterController extends Controller
{
  
   public function index(Request $request)
   {
       return view('register.register');
   }


   public function post(Request $request)
   {
      $rules = [
        'name' => 'required',
        'email' => 'email',
        'password' => 'required|min:7',
        'confilm' => 'required|same:password',
      ];

      $messages = [
        'name.required' => '名前は必ず入力して下さい!!!',
        'email.email'  => 'メールアドレスが必要です。',
        'password.required' => 'PWは必ず入力してください',
        'password.min' => '7文字以上で入力してください',
        'confilm.required' => '確認用のPWを入力してください',
        'confilm.same' => 'パスワードが一致しません。',
      ];

      $validator = Validator::make($request->all(), $rules, $messages);
      if ($validator->fails()) {
          return redirect('/register')
              ->withErrors($validator)
              ->withInput();
      }
      
      return view('loggedin.loggedin', ['name' => $request->name]);
   }

}
