@extends('layouts.index')

@section('header')
<h1>REGISTER</h1>
    <ul class="top">
      <li><a href="{{ url('/login') }}">LOGIN</a></li>
      <li><a href="{{ url('/register') }}">REGISTER</a></li>
    </ul>
@endsection

@section('container')
<form method="post" action="/register">
      @csrf
      @if (count($errors) > 0)
      <p>入力に問題があります。再入力して下さい。</p>
      @endif
      <h3>REGISTER</h3>
        
        <div class="input">
          
          <div  class="name">
            <p>Name</p>
                @error('name')
                 <div class="error">
                    <p>ERROR</p>
                    <p>{{$message}}</p>
                 </div>
                @enderror
            <input type="text" name="name" value="{{ old('name') }}">
          </div>
      
          <div class="email">
            <p>E-Mail Adress</p>
               @error('email')
                 <div class="error">
                   <p>ERROR</p>
                   <p>{{$message}}</p>
                 </div>
               @enderror
            <input type="text" name="email" value="{{ old('email') }}">
          </div>
      
          <div class="password">   
            <p>Password</p>
              @error('password')
                <div class="error">
                  <p>ERROR</p>
                  <p> {{$message}}</p>
                </div>
              @enderror
            <input type="password" name="password" value="{{ old('password') }}">
          </div>
    
          <div class="confilm">
            <p>Confilm</p>
              @error('confilm')
                <div class="error">
                  <p>ERROR</p>
                  <p>{{$message}}</p>
                </div>
             @enderror
            <input type="password" name="confilm" value="{{ old('confilm') }}">
          </div>

          <input class="submit" type="submit" name="login" value="REGISTER">
      
        </div>
</form>
@endsection