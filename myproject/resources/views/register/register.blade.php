@extends('layouts.index')

@section('title','REGISTER')

@section('inputform')
<form method="" action="">
      
      <h3>REGISTER</h3>
        
        <div class="input">
          
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

          <input class="submit" type="submit" name="login" value="REGISTER">
      
        </div>
</form 
@endsection