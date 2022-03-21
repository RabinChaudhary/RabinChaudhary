<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'unique:users|required|email',
            'password' => 'min:6|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:6',
            'mobile' => 'min:10|required'
        ]);
        $users = new user;
        $users->firstname = $request->first_name;
        $users->lastname = $request->last_name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->gender = $request->gender;
        $users->mobile = $request->mobile;



        $users->save();

        return redirect()->to('/register')->with('status', 'You have sucessfully registered.');;
    }
}
