<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomLoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $validation=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if ($validation){
            $user=User::where('email',$request->email)->first();
            if($user){
            
            if(($user) && $user->status=='active'){
                $password=$request->password;
                $dbPassword=$user->password;
                if (Hash::check($password, $dbPassword)) {
                    Session::put('logged',$logged_in=true);
                    return view('home')->with(['user'=>$user]);

            } else{
                Session::flash('error','Your password is incorrect');
                return redirect()->back();
            }
            

        } else{
            Session::flash('error','Your email is not active');
            return redirect()->back();

        }
    } else {
        Session::flash('error','This email doesnot exist');
            return redirect()->back();
    }

    }
}

        public function logout(){
            Session::put('logged',$logged_in=true);
            Session::flush();
            return redirect('/login');
    }
}
