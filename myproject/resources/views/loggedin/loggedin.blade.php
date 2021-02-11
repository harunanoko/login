@extends('layouts.index')

@section('header')
<h1>HOME</h1>
    <ul class="top">
      <li><a href="">LOGOUT</a></li>
    </ul>
@endsection

@section('container')

<div class="home">
      <h3>HOME</h3>
        
        <div class="message">
          <h2>{{$list1}}</h2>
          <p>You are logged in!</p>
      
        </div>
@endsection