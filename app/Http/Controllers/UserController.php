<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Mobile;


class UserController extends Controller
{
    public function addUserMobile(Request $request)
    {
        $validatedData = $request->validate([
            'name'   => 'required|min:10|max:255',
            'email'  => 'required|unique:users|max:255',
            'pass'   => 'required|unique:users|min:6|max:18',
            'mobile' => 'required|unique:users',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->pass;
        $user->save();

        $mobile = new Mobile;
        $mobile->mobile = $request->mobile;
        $user->mobile()->save($mobile);
        return redirect('/');
    }
    public function index()
    {
        //get user  and mobile data from User model
        $user = User::all();   
        return view('index', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('edit',compact('user'));
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name'   => 'required|min:10|max:255',
            'email'  => 'required|unique:users|max:255',
            'pass'   => 'required|unique:users|min:6|max:18',
            'mobile' => 'required|unique:users',
        ]);
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile->mobile = $request->mobile;
        $user->push();
        return redirect('/');
    }

    public function delete($id)
    { 
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}