@extends('layouts.layout')

@section('title','REGISTER')

@section('inputform')
        <div  class="name">
           <p>Name</p>
           <input type="text" name="name">
        </div>
      
        <div class="email">
           <p>E-Mail Adress</p>
           <input type="text" name="email">
        </div>
      
        <div class="password">   
           <p>Password</p>
           <input type="password" name="password">
        </div>
    
        <div class="confilm">
           <p>Confilm</p>
           <input type="password" name="password">
        </div>  
@endsection