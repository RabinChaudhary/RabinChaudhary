<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function getUsers()
    {


        return view('users.view');
    }
    public function addUsers()
    {

        return view('users.add');
    }
    public function getDashboard()
    {

        return view('admin.dashboard');
    }
    public function index()
    {
        return view('admin.admin');
    }
    public function addUser(Request $request)
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'phone' => 'min:10|required',
                'image' => ['image', 'nullable', 'max:1999'],
                'address' => ['required'],
            ]
        );
        if ($request->hasFile('image')) {
            //Get filename with the extension
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename\
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload the picture 
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = "noimage.jpg";
        }
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');
        $user->status = $request->input('status');
        $user->image = $fileNameToStore;
        $user->save();

        Session::flash('success', 'You have registered Successfully.');
        return view('users.add');
    }



    public function admin(Request $request)
    {
        
        $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]
        );

        $email = $request->input('email');
        $password = $request->input('password');
        $admin = "admin@admin.com";
        if ($email == $admin) {
            $authUser = User::where('email', $email)->first();
            Session::put('admin', $authUser);

            $dbPassword = $authUser->password;
            if (Hash::check($password, $dbPassword)) {
                $users = User::all();
                Session::put('users', $users);
                return view('admin.dashboard');
                // , ['users' => $users, 'admin' => $authUser]);
            } else {
                Session::flash('autherror', 'Invalid admin credentials');
                return redirect()->back();
            }
        } else {
            Session::flash('autherror', 'You are not allowed to access admin page.');
            return redirect()->back();
        }
    }
    public function logouts()
    {
        Session::flush();
        Auth::logout();
        return redirect('/admin');
    }
}
