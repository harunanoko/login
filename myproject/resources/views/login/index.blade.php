@extends('layouts.index')

@section('header')
<h1>LOGIN</h1>
    <ul class="top">
      <li><a href="{{ url('/login') }}">LOGIN</a></li>
      <li><a href="{{ url('/register') }}">REGISTER</a></li>
    </ul>
@endsection

@section('container')
<form method="" action="">
      
      <h3>LOGIN</h3>
        
        <div class="input">
          
          <div class="email">
            <p>E-Mail Adress</p>
            <input type="text" name="email">
          </div>

          <div class="passwerd">
            <p>Password</p>
            <input type="password" name="password">
          </div>
        
          <input class="submit" type="submit" name="login" value="LOGIN">
      
        </div>
</form>
@endsection

