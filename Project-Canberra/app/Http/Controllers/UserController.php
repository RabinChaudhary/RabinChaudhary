<?php

namespace App\Http\Controllers;

use App\Mail\StatusMail;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session as FacadesSession;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.list')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id); // select * from users where id = $id;

        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('user_id');
        
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'unique:users,email,' . $id,
            'phone' => 'min:10|required',
            'address' => 'required',
            'image' => 'image|nullable|max:1999',


        ]);

        if (request()->hasFile('image')) {
            //Get filename with the extension
            $fileNameWithExt = request()->file('image')->getClientOriginalName();
            //Get just filename\
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //Get just ext
            $extension = request()->file('image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            //upload the picture 
            $path = request()->file('image')->storeAs('public/images', $fileNameToStore);
        } 

        $user=User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->phone = $request->input('phone');

        if ($request->hasFile('image')) {
            $user->image = $fileNameToStore;
        }
        $user->save();
        Session()->flash('status', 'You have updated Successfully.');
        return view('users.edit',['user'=>$user]);
       
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function status_update($id)
    {
        $user = DB::table('users')
            ->select('status')
            ->where('id', '=', $id)
            ->first();

        if ($user->status == "active") {
            $status = "inactive";
        } else {
            $status = "active";
        }
        $values = array('status' => $status);
        DB::table('users')->where('id', $id)->update($values);
        $person = User::find($id);
        $status = $person->status;
        $email = $person->email;
        $name = $person->firstName;


        $mailData = [
            'title' => 'Notification',
            'body' => 'Hi, ' . $name . ' your email ' . $email . ' is activated',
            'name' => $name,
            'email' => $email,
            'status' => $status,

        ];

        Mail::to($email)->send(new StatusMail($mailData));
        Session()->flash('success', 'Status has been updated successfully.');

        return redirect()->back();
    }
}
