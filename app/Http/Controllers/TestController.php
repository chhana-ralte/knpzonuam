<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('test.index');
    }
    public function dashboard(){
        return view('test.dashboard');
    }
}
