@extends('layouts.layout')

@section('title','LOGIN')

@section('inputform')
        <div class="email">
          <p>E-Mail Adress</p>
          <input type="text" name="email">
        </div>

        <div class="passwerd">
          <p>Password</p>
          <input type="password" name="password">
        </div>
@endsection

