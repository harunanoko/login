@extends('layouts.index')

@section('title','LOGIN')

@section('inputform')
<div class="form">
      
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
        
          <input class="submit" type="submit" name="login" value="@yield('title')">
      
        </div>
</div>
@endsection

