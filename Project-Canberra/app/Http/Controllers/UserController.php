<?php

namespace App\Http\Controllers;

use App\Mail\ResetPassword;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function display(Request $request)
    {
        return view('users.display');
    }

    public function index(Request $request)
    {
        return view('home');
    }

    public function register(Request $request)
    {

        return view('users.register');
    }

    public function store(Request $request)
    {
        $validation = $request->validate(
            [
                'name' => 'required|max:50',
                'email' => 'unique:users,email',
                'password' => 'required|min:8|max:30|confirmed',
                'address' => 'max:100',
                'phone' => 'digits_between:10,15',
                //'image' => 'required|images|mimes:jpeg,png,jpg|max:2048',
            ]
        );

        //store data to the databse

               
            $user = new Users();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->address = $request->input('address');
            $user->phone = $request->input('phone');
        //    $user->image = $request->file('image')->getClientOriginalName();
    /*

        $path = public_path('tmp/uploads');

        if (!file_exists($path) ) {
            mkdir($path, 0777, true); // setting permission to folder
        }

        $file = $request->file('image');

        $fileName = uniqid() . '_' . trim($file->getClientOriginalName());
 

            $user->image = $fileName;
            */
            if($user->save()){
                //$file->move($path, $fileName);
                        
                Session::flash('message', 'You have registered Successfully.');
                return redirect()->route('user.register');
            }
        
    }

    public function login()
    {
        return view('users.login');
    }

    public function auth(Request $request)
    {
        $validation = $request->validate(
            [
                'email' => 'email',
                'password' => 'required',
            ]
        );

        
        $email = $request->input('email');
        $password = $request->input('password');

        $authUser = Users::where('email', $email)
            ->first();

        if (!empty($authUser)) {
            $dbPassword = $authUser->password;
            if (Hash::check($password, $dbPassword)) {
                Session::put('authEmail',$authUser->email);
                if($authUser->member === "administrator"){
                    //this is Admin user 
                    return view('users.dashboard', ['res' => $authUser]);
                }else{
                    //this is normal user 
                    return view('users.myProfile', ['res' => $authUser]);
                }
                exit;
                
            } else {
                Session::flash('autherror', 'Invalid username and password.');
                return redirect()->route('user.login');
            }
        } else {
            Session::flash('autherror', 'This email user does not exist.');
            return redirect()->route('user.login');
        }
    }

    public function forgotpassword()
    {
        return view('users.forgotpassword');
    }

    public function resetpassword(Request $request)
    {
        $validation = $request->validate(
            [
                'email' => 'email'
            ]
        );

        $email = $request->input('email');

        $authUser = Users::where('email', $email)
            ->first();

        if ($authUser) {

            $digits = 6;
            $pwd = rand(pow(10, $digits - 1), pow(10, $digits) - 1);

            $updatePassword = Users::where('id', $authUser->id)->update(['password' => Hash::make($pwd)]);

            if ($updatePassword) {

                $details = ['name' => $authUser->first_name, 'password' => $pwd];
                Mail::to($email)->send(new ResetPassword($details));
            }
        } else {
            Session::flash('autherror', 'This email user does not exist.');
            return redirect()->route('user.login');
        }


        // send an emai from here
    }

    public function view(Request $request)
    {
        $name = $request->input('name');

        $data = [
            'name' => $name,
            'age' => 20,
            'gender' => 'male'
        ];

        return view('users.view')->with($data);
    }

    public function edit($id){

    $user = Users::find($id); // select * from users where id = $id;

    return view('users.edit',['user'=>$user]);

    }

    public function update(Request $request){

        $id = $request->input('user_id');

        $validation = $request->validate(
            [
                'name' => 'required|max:50',
                'email' => 'unique:users,email,'. $id,
                'address' => 'max:100',
                'phone' => 'digits_between:10,15'.$id,
            ]
        );

        //update the user data

        $data =[
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'address'=>$request->input('address'),
            'phone'=>$request->input('phone'),
        ];

        $user = Users::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->save();
        
       Session::flash('message', 'You have registered Successfully.');
       return view('users.edit',['user'=>$user]);
    }

    public function logout(Request $request) {
        Session::flush();
        Auth::logout();
        return redirect('/user/login');
    }

} 