<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class LoggedinController extends Controller
{
    public function index(){
        return view('loggedin.loggedin');
    }
}
