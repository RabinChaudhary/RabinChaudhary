<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('master');
    }
    public function register()
    {
        return view('register');
    }
    public function home()
    {
        return view('/home');
    }
    public function login()
    {
        return view('/login');
    }
}
