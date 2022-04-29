<?php

namespace App\Http\Controllers;

use App\Models\user;

use Illuminate\Http\Request;



use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function create()
    {
        return view('/login');
    }

    public function login(Request $request)
    {

        $validation=$request->validate(
            [
                'email' => 'email',
                'password' => 'required'
            ]
        );

        $email = $request->input('email');
        $password = $request->input('password');

        $authUser = user::where('email', $email)
            ->first();


        if (!empty($authUser)) {

            $dbPassword = $authUser->password;

            if (Hash::check($password, $dbPassword)) {
                $users = user::all();  // select * from users;
                return view('loginhome', ['users' => $users]);
            } else {

                return redirect()->to('login')->with('errors', 'Invalid username and password.');
            }
        } else {
            return redirect()->to('/login')->with('errors', 'The email user doesnot exist');;
        }
    }
}
