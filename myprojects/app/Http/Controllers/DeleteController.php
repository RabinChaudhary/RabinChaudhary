<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class DeleteController extends Controller
{
    public function loginhome()
    {
        return view('loginhome');
    }

    public function deleteUser($id)
    {


        $user = user::findorFail($id);
        $email = $user->email;
        if ($email) {
            $mailData = [
                'title' => 'Mail from Laravel.com',
                'body' => 'Hi, your ' . $email . ' is deleted..',
                'email' => $email,
            ];

            Mail::to($email)->send(new DemoMail($mailData));
            $user->delete();
            $users = user::all();
            Session::flash('message', 'You have deleted Successfully.');

            return view('loginhome', ['users' => $users]);
        }
    }
    public function updateUser($id)
    {
        $user = user::find($id);
        return view('usersview', ['user' => $user]);
    }

    public function update(Request $request)
    {

        $id = $request->input('user_id');

        $validation = $request->validate(
            [
                'first_name' => 'required|max:10',
                'last_name' => 'required|max:10',
                'email' => 'unique:users,email,' . $id,
                'gender' => 'required|in:Male,Female,Other',
                'mobile' => 'required|digits_between:10,10|unique:users,mobile,' . $id,
            ]
        );

        //update the user data

        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'mobile' => $request->input('mobile'),
        ];

        $user = user::find($id);
        $user->firstname = $request->input('first_name');
        $user->lastname = $request->input('last_name');
        $user->email = $request->input('email');
        $user->gender = $request->input('gender');
        $user->mobile = $request->input('mobile');
        $user->save();

        Session::flash('message', 'You have updated Successfully.');
        return view('usersview', ['user' => $user]);
    }
}
